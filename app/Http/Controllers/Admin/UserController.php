<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function __construct()
    {
        $this->title = ucwords(str_replace('-', ' ', request()->segment(1)));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $records = User::select('id','first_name','last_name','email','dob','avatar')->with('roles:id,title')->latest()->get();
            return datatables()->of($records)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('roles', function ($data) {
                    $roles = '';
                    foreach ($data->roles as $role) {
                        $roles .= '<span class="badge badge-info">'.$role->title.'</span>&nbsp;';
                    }
                    return $roles;
                })->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->avatar) ? $data->avatar : 'assets/images/users/avator.png') . '">';
                })->addColumn('action', function ($data) {
                    $edit = ''; $view = ''; $delete = '';
                    if (Gate::allows('permission_edit')) {
                        $edit = '<a title="Edit" href="' . route('admin.'.request()->segment(1).'.edit', $data['id']) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    }
                    if (Gate::allows('permission_show')) {
                        $view = '<button title="View" type="button" name="view" id="' . $data['id'] . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;';
                    }
                    if (Gate::allows('permission_delete')) {
                        $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-v-pink btn-sm"><i class="fa fa-trash"></i></button>';
                    }
                    return $edit.$view.$delete;
                })->rawColumns(['checkbox','action','image','roles'])->make(true);
        }
        $title = $this->title;
        return view('admin.' . request()->segment(1) . '.list',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        $roles = Role::all()->pluck('title', 'id');
        return view('admin.user.create', compact('roles','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'avatar' => 'sometimes|image|mimes:jpg,jpeg,png',
            'roles.*' => 'integer',
            'roles' => 'required|array'
        ]);
        $record = array(
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'dob' => $request->input('dob'),
            'password' => \Hash::make($request->input('password')),
        );
        if (!empty($request->file('avatar'))) {
            $record['avatar'] = single_image($request->file('avatar'), request()->segment(1));
        }
        $user = User::create($record);
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('admin.' . request()->segment(1) . '.index')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user->load('roles:id,title');
        return response()->json($user,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $roles = Role::all()->pluck('title', 'id');
        $user->load('roles');
        $title = $this->title;
        return view('admin.' . request()->segment(1) . '.edit', compact('roles', 'user','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'avatar' => 'sometimes|image|mimes:jpg,jpeg,png',
            'email' => 'required|email',
            'roles.*' => 'integer',
            'roles' => 'required|array'
        ]);
        $record = array(
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'dob' => $request->input('dob'),
            'is_authenticate' => $request->input('is_authenticate') ?? 0,
        );
        if (!empty($request->file('avatar'))) {
            if (\File::exists($user->avatar)) {
                \File::delete($user->avatar);
            }
            $image = single_image($request->file('avatar'), request()->segment(1));
            $record['avatar'] = $image;
        }
        $user->update($record);
        $user->roles()->sync($request->input('roles',[]));
        return redirect()->route('admin.' . request()->segment(1) . '.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        echo "Deleted Successfully.";
    }
    public function delete_all(Request $request)
    {
        User::whereIn('id', $request->input('checkboxValue',[]))->delete();
        return response()->json('Selected records Deleted Successfully.');
    }

    public function profileEdit(User $user)
    {
        if ($user->id !== auth()->user()->id)
        {
            return abort('403');
        }
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = 'Profile Information';
        return view('admin.' . request()->segment(1) . '.profile', compact( 'user','title'));
    }
}

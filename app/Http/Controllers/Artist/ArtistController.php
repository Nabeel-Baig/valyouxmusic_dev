<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Artist;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ArtistController extends Controller
{
    public function __construct()
    {
        $this->title = 'Artist';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('artist_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $records = Artist::select('id','category','brand','photo')->where('user_id',auth()->user()->id)->latest()->get();
            return datatables()->of($records)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->photo) ? $data->photo : 'assets/images/users/avator.png') . '">';
                })->addColumn('action', function ($data) {
                    $edit = ''; $view = ''; $delete = '';
                    if (Gate::allows('artist_edit')) {
                        $edit = '<a title="Edit" href="' . route('artist.'.request()->segment(2).'.edit', $data['id']) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    }
                    if (Gate::allows('artist_show')) {
                        $view = '<button title="View" type="button" name="view" id="' . $data['id'] . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;';
                    }
                    if (Gate::allows('artist_delete')) {
                        $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-v-pink btn-sm"><i class="fa fa-trash"></i></button>';
                    }
                    return $edit.$view.$delete;
                })->rawColumns(['checkbox','action','image'])->make(true);
        }
        $title = $this->title;
        return view('artist.' . request()->segment(2) . '.list',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        return view('artist.' . request()->segment(2) . '.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = array(
            'category' => $request->input('category'),
            'brand' => $request->input('brand'),
            'about' => $request->input('about'),
            'website' => $request->input('website'),
            'spotify' => $request->input('spotify'),
            'soundcloud' => $request->input('soundcloud'),
            'applemusic' => $request->input('applemusic'),
            'youtube' => $request->input('youtube'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'user_id' => auth()->user()->id
        );
        if (!empty($request->file('photo'))) {
            $record['photo'] = single_image($request->file('photo'), request()->segment(2));
        }
        Artist::insert($record);
        return redirect()->route('artist.' . request()->segment(2) . '.index')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return response()->json($artist,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        abort_if(Gate::denies('artist_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = $this->title;
        return view('artist.' . request()->segment(2) . '.edit', compact('artist','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        $record = array(
            'category' => $request->input('category'),
            'brand' => $request->input('brand'),
            'about' => $request->input('about'),
            'website' => $request->input('website'),
            'spotify' => $request->input('spotify'),
            'soundcloud' => $request->input('soundcloud'),
            'applemusic' => $request->input('applemusic'),
            'youtube' => $request->input('youtube'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'user_id' => auth()->user()->id
        );
        
        if (!empty($request->file('photo'))) {
            if (\File::exists($artist->photo)) {
                \File::delete($artist->photo);
            }
            $record['photo'] = single_image($request->file('photo'), request()->segment(2));
        }
        $artist->update($record);
        return redirect()->route('artist.' . request()->segment(2) . '.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artist::findOrFail($id)->delete();
        echo "Deleted Successfully.";
    }
    public function delete_all(Request $request)
    {
        Artist::whereIn('id', $request->input('checkboxValue',[]))->delete();
        return response()->json('Selected records Deleted Successfully.');
    }

}

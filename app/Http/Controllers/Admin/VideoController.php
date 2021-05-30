<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PromoteSong;
use App\Mail\ValyouSong;
use Illuminate\Http\Request;
use App\Models\VideoUploads;
use Illuminate\View\View;
use Mail;

class VideoController extends Controller
{
    final public function myVideo(): View
    {
        $records = VideoUploads::with('user')->where('user_id',auth()->user()->id)->latest()->get();
        // dd($records);
        return view('videos',compact('records'));
    }

    public function create()
    {
        $title = 'Upload Videos';
        return view('admin.artist.upload-video',compact('title'));
    }

    public function upload(Request $request)
    {
        $videoUpload = new VideoUploads;
        $videoUpload->description = $request->input('description');
        if (!empty($request->file('name'))) {
            $videoUpload->name = single_image($request->file('name'), 'videos');
        }
        $videoUpload->user()->associate(auth()->user());
        $videoUpload->save();
        return redirect()->route('admin.social-media')->with('success', 'Added Successfully.');
    }

    final public function socialMedia(): View
    {
        $records = VideoUploads::with('user')->latest()->get();
        $users = \App\User::select('id','first_name','last_name')->where('id','<>',auth()->user()->id)->get();
        return view('social-media',compact('records','users'));
    }

    public function promoteSong(Request $request)
    {
        Mail::to('nabeel_baig@hotmail.com')->send(new PromoteSong($request->all()));
        return redirect()->back()->withSuccess('Your Promoted a Song');
    }

    public function valyouSong(Request $request)
    {
        \App\User::where('id',auth()->user()->id)->update(['wallet' => (float)auth()->user()->wallet - 0.02]);
        Mail::to(auth()->user()->email)->send(new ValyouSong($request->all()));
    }
}

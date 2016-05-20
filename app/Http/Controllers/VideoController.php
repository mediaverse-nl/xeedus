<?php

namespace Xeedus\Http\Controllers;

use Xeedus\User;
use Xeedus\Category;
use Xeedus\Author;
use Illuminate\Support\Facades\Auth;
use Validator;
use Xeedus\Video;
use Illuminate\Http\Request;

use Xeedus\Http\Requests;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();

        return view('video.index')->with('videos', $videos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('cate_id', '>=', 1)->get();

        return view('video.create')->with('categories', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('course/upload')
                ->withErrors($validator)
                ->withInput();
        }

        $video = new Video;

        $video->name = $request->name;
        $video->catogory_id = $request->cate_id;
        $video->user_id = Author::where('user_id', Auth::user()->id)->get();

        $video->save();

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($video_key)
    {
        // get the nerd
        $video = Video::where('video_key', $video_key)->first();

        // show the view and pass the nerd to it
        return view('video.show')
            ->with('video', $video);
    }

    public function showMyVideos()
    {
        $user = Author::where('user_id', Auth::user()->id)->first();

        // show the view and pass the nerd to it
        return view('courses.showmyvideos')
            ->with('users', $user);
    }

    public function showVideoCate($cate)
    {
        $categories = Category::find($cate);
        $videos = Video::where('name', '=', $categories)->first();

        foreach ($videos as $video) {
           echo $video->name;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the nerd
        $video = Video::find($id);

        // show the edit form and pass the nerd
        return view('courses.edit')
            ->with('video', $video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'thumbnail' => 'max:255',
            'beschrijving' => 'max:255',
            'level' => 'max:255',
            'status' => 'max:255',
        ]);

        if ($validator->fails()) {
            return redirect('profile/courses/' . $id . '')
                ->withErrors($validator)
                ->withInput();
        }

        // store
        $video = Video::find($id);
        $video->name = $request->name;
        $video->thumbnail = $request->thumbnail;
        $video->beschrijving = $request->beschrijving;
        $video->level = $request->level;
        $video->status = $request->status;
        $video->save();

        // redirect
        return redirect('profile/courses/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

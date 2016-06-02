<?php

namespace Xeedus\Http\Controllers;

use DB;
use Xeedus\Order;
use Xeedus\Video;
use Xeedus\Category;
use Xeedus\Author;
use Validator;
use Auth;


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

        $videos = Video::where('author_id', Auth::user()->id)
            ->get();

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
            'name' => 'max:255',
        ]);

        if ($validator->fails()) {
            return redirect('dd')
                ->withErrors($validator)
                ->withInput();
        }

        $random_key = 'img_'.str_random(10);

        $author = Author::where('user_id', Auth::user()->id)->first();
        $video = new Video;

        $video->author_id = $author->id;
        $video->name = $request->name;
        $video->category_id = $request->cate_id;
        $video->video_key = str_random(10);
        $video->thumbnail = $random_key;

        $video->save();


        // SET UPLOAD PATH
        $destinationPath = base_path() . '\public\thumbnail';
        $extension = $request->file('image')->getClientOriginalExtension();

        $upload_success = $request->file('image')->move(
            $destinationPath,  $random_key.'.'.$extension
        );


        return $upload_success;//redirect('video');
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
        $video = DB::table('videos')
            ->join('author', 'author.id', '=', 'videos.author_id')
            ->join('users', 'users.id', '=', 'author.user_id')
            ->where('video_key', $video_key)
            ->first();

        // show the view and pass the nerd to it
        return view('video.show')
            ->with('video', $video);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        // get the nerd
        $video =  DB::table('order')
            ->join('videos', 'videos.id', '=', 'video_id')
            ->where('order.user_id', Auth::user()->id)
            ->get();

        // show the view and pass the nerd to it
        return view('video.mine')->with('videos', $video);
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
        $video = Video::where('video_key',$id)->first();
        $category = Category::where('cate_id', '>=', 1)->get();

        // show the edit form and pass the nerd
        return view('video.edit')
            ->with('video', $video)
            ->with('categories', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $validator = Validator::make($request->all(), [
            'name' => 'max:255',
            'thumbnail' => 'max:255',
            'beschrijving' => 'max:255',
            'level' => 'max:255',
            'status' => 'max:255',
        ]);

        if ($validator->fails()) {
            return redirect('video/' . $request->video_key . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        // store
        $video = Video::where('video_key', $request->video_key)->first();
        $video->name = $request->name;
        $video->thumbnail = $request->thumbnail;
        $video->beschrijving = $request->beschrijving;
        $video->level = $request->level;
        $video->status = $request->status;
        $video->save();

        // redirect
        return redirect('/video/'.$video->video_key);

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

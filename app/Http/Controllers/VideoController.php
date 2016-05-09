<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Video;
use Illuminate\Http\Request;

use App\Http\Requests;

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
        return view('video.create');
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

        $inputs = $request->all();
        //$this->request->add(['date_of_birth' => )]);

        Video::Create($inputs);

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the nerd
        $video = Video::find($id);

        // show the view and pass the nerd to it
        return view('video.show')
            ->with('video', $video);
    }

    public function showVideoCate($cate)
    {
        $videos = Video::where('catogory_id', '=', $cate)->get();

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
        return view('video.edit')
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
        ]);

        if ($validator->fails()) {
            return redirect('course/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $video = Video::find($id);
            $video->name = $request->name;
            $video->save();

            // redirect
            return redirect('course');
        }
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

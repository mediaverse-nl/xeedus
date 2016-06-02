<?php

namespace Xeedus\Http\Controllers;

use Illuminate\Http\Request;
use Xeedus\Category;

use Xeedus\Http\Requests;
use Xeedus\Video;
use View;
use DB;


class CategoryController extends Controller
{

    protected $category;

    public function __construct()
    {
        $this->category = Category::all();

        //View::share('category', $this->category);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$category = Category::where('cate_id', '=', '0')->get();

        //return view('courses.index')->with('category', $category);
        $category = Category::all();
        
        return view('courses.index')->with('videos', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cate_name)
    {
        $category_id = Category::where('name', str_replace('-', ' ', $cate_name))->first();

        $videos = Category::where('cate_id', $category_id->id)
            ->get();

        return view('courses.indexTwo')
            ->with('videos', $videos);
            //->with('videos', $videos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

<?php

namespace App\Http\Controllers\pages;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CreditsController extends Controller
{
    public function index(){
        return view('pages.credits');
    }

    public function store(Request $request){

        $mollie = $request->all();

    }

}

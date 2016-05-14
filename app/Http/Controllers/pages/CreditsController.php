<?php

namespace Xeedus\Http\Controllers\pages;

use Illuminate\Http\Request;

use Xeedus\Http\Requests;
use Xeedus\Http\Controllers\Controller;

class CreditsController extends Controller
{
    public function index(){
        return view('pages.credits');
    }

}

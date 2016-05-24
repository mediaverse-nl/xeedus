<?php

namespace Xeedus\Http\Controllers;

use Validator;
use Xeedus\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Xeedus\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.profile.show');
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
    public function show(Request $request)
    {
        //$user = User::find(1);
        $message = $request->session()->get('message');
        return view('auth.profile.show')->with('message', $message);
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit()
    {
        return view('auth.profile.edit');
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
        $validator = Validator::make($request->all(), [
            'voornaam' => 'max:255',
        ]);

        if ($validator->fails()) {
            return redirect('profile/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find(Auth::user()->id);

        $user->voornaam = $request->voornaam;
        $user->achternaam = $request->achternaam;
        $user->tussenvoegsel = $request->tussenvoegsel;
        $user->geslacht = $request->geslacht;
        $user->land = $request->land;
        $user->stad = $request->stad;
        $user->postcode = $request->postcode;
        $user->straatnaam = $request->straatnaam;
        $user->huisnummer = $request->huisnummer;

        $user->save();

        $request->session()->put('message', 'met succes geupdate');

        return redirect('/profile');
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

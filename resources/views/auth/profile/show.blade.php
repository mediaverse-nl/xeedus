@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    {{Session::get('message')}}
                    <p>{{ Auth::user()->email }}</p>
                    <p>{{ Auth::user()->voornaam }}</p>
                    <p>{{ Auth::user()->tussenvoegsel }}</p>
                    <p>{{ Auth::user()->achternaam }}</p>
                    <p>{{ Auth::user()->geslacht }}</p>
                    <p>{{ Auth::user()->land }}</p>
                    <p>{{ Auth::user()->stad }}</p>
                    <p>{{ Auth::user()->postcode }}</p>
                    <p>{{ Auth::user()->straatnaam }}</p>
                    <p>{{ Auth::user()->huisnummer }}</p>
                    <a href="/profile/edit" class="btn btn-default">edit profile</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

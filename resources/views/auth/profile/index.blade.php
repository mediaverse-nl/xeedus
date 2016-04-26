@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <h1>{{ Auth::user()->name }}</h1>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
            <a href="/profile/edit" class="btn btn-default">edit profile</a>
        </div>
    </div>
</div>
@endsection

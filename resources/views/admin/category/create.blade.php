@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">admin index</div>
                <div class="panel-body">

                    <div>
                        <a href="{{ url('/admin/categories') }}">categories</a>
                        <a href="{{ url('/admin/videos') }}">videos</a>
                        <a href="{{ url('/admin/users') }}">users</a>
                        <a href="{{ url('/admin/') }}">ss</a>
                    </div>

                     {!! Form::open(['route' => 'StoreCategory']) !!}
                    {!! Form::label('name', 'name') !!}
                    {!! Form::text('name') !!}

                    {!! Form::submit('submit')!!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

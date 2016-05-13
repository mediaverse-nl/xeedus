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

                    categories

                    <a class="btn btn-default" href="{{ url('/admin/') }}"> back</a>
                    <a class="btn btn-default" href="{{ url('/admin/categories/create') }}"> new</a>


                    @foreach($categories as $category)
                        {{$category->id}}
                        {{$category->name}}
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title')
    upload
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">video</div>
                    <div class="panel-body">

                        {{ $video->name }}<br>
                        <a href="/courses/{{ $video->id  }}">bekijken</a><br>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

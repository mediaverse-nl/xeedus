@extends('layouts.app')

@section('title')
    courses
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">view author </div>

                    <div class="panel-body">

                        <label>username</label> : {{$author->username}}

                        <br>
                        <br>
                        <br>

                        @foreach($author->author->video as $r)
                            {{$r->review->sum('rating') }}
                        @endforeach

                        @foreach($author->author->video as $video)
                            <a href="{{ url('/video/'.$video->video_key) }}">{{$video->name}}</a><br>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

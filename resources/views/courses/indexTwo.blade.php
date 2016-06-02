@extends('layouts.app')

@section('title')
    courses
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">categories</div>

                    <div class="panel-body">

                        <div class="col-lg-3">
                            @foreach($videos as $cate)
                                <a href="{{ url('courses/'.str_replace(' ', '-', $cate->name).'/c') }}">{{$cate->name}}</a><br>
                            @endforeach
                        </div>

                        <div class="col-lg-9">
                            @foreach($videos as $video)

                                @foreach($video->video as $vid)
                                    <div class="col-lg-12" style="border: 1px solid" >

                                        <div class="col-lg-3">
                                            <a href="{{ url('video/'.$vid->video_key) }}">
                                                <img style="height: 100px; width: 100px" src="/thumbnail/{{$vid->thumbnail}}">
                                            </a>
                                        </div>
                                        <div class="col-lg-9">
                                            <h1>{{$vid->name}}</h1>
                                            <p>{{$vid->beschrijving}}</p>

                                            <div>
                                                <label>category</label> : <a href=""> {{$vid->category->name}}</a> -
                                                <label>author</label> : <a href="{{ url('/author/'.$vid->author->user->username) }}">{{$vid->author->user->username}}</a> -
                                                <label>level</label> {{$vid->level}} -
                                                <label>price</label> {{$vid->price}} -
                                                <a class="btn btn-primary pull-right" href="{{url('/video/'.$vid->video_key)}}">bekijken</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



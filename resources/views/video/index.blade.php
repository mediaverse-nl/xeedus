@extends('layouts.app')

@section('title')
    courses
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">videos</div>

                    <div class="panel-body">

                        <div class="col-lg-12">
                            <div class="col-lg-4" style="border: 1px solid;">
                                <img style="height: 200px; width: 200px;" src="{{Auth::user()->author->imnage}}">
                            </div>
                            <div class="col-lg-8">
                                <label>username</label> : {{Auth::user()->username}}<br>
                                <label>username</label> : {{Auth::user()->username}}
                                <div class="pull-right">
                                    review rating
                                </div>
                            </div>
                            <p>{{Auth::user()->author->biography}}</p>
                        </div>

                        @foreach($videos as $video)

                            {{$video->name}}
                            <a href="{{ url('/video/'.$video->video_key.'/edit') }}">edit</a>
                            <br>

                            {{$video->category->name}}
                            {{--{{$video->author->name}}--}}
                        @endforeach




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

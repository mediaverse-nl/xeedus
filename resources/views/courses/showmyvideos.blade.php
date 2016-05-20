
@extends('layouts.app')

@section('title')
    home
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">my courses</div>

                    <div class="panel-body">

                        @foreach($users->video as $video)
                            {{$video->name}}
                            <a href="{{url('profile/courses/'. $video->id)}}">edit</a>
                            <br>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

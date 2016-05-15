
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
                        @foreach($videos as $vid)
                            {{$vid->name}}<br>
                            <a href="/course/{{ $video->id  }}/edit">{{ $video->id  }}</a><br><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

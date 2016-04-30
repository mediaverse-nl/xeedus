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

                        @foreach($videos as $video)
                            {{ $video->name }}<br>
                            <a href="/courses/{{ $video->id  }}">bekijken</a><br>
                            <a href="/courses/{{ $video->id  }}/edit">{{ $video->id  }}</a><br><br><hr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

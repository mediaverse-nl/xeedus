@extends('layouts.app')

@section('title')
    video page
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">video</div>
                    <div class="panel-body">

                        {{ $video->name }}
                        <div style="height: 230px; width: 340px; border: 1px solid #333;">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

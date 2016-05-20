
@extends('layouts.app')

@section('title')
    home
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">edit my courses</div>

                    <div class="panel-body">

                        {{ Form::open(array('url' => 'profile/courses/'.$video->id, 'method' => 'put')) }}

                        {!! Form::label('name', 'name') !!}
                        {!! Form::text('name', $video->name) !!}
                        {!! Form::label('thumbnail', 'thumbnail') !!}
                        {!! Form::text('thumbnail', $video->thumbnail) !!}
                        {!! Form::label('beschrijving', 'beschrijving') !!}
                        {!! Form::text('beschrijving', $video->beschrijving) !!}
                        {!! Form::label('level', 'level') !!}
                        {!! Form::text('level', $video->level) !!}
                        {!! Form::label('status', 'status') !!}
                        {!! Form::text('status', $video->status) !!}

                        {!! Form::submit('submit') !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

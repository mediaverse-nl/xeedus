@extends('layouts.app')

@section('title')
    upload
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">upload</div>
                    <div class="panel-body">

                        @include('common.errors')

                        {{ Form::open(['route' => 'video.update']) }}

                        {{ Form::hidden('video_key', $video->video_key) }}

                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>

                        {!! Form::Label('cate_id', 'cate_id:') !!}

                        <select class="" name="cate_id">
                            @foreach($categories as $item)
                                @if($item->cate_id != 0)
                                    <option value="{{$item->id}}">
                                        {{$item->name}}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        <br>

                        <div class="form-group">
                            {{ Form::label('level', 'level') }}<br>

                            {{ Form::label('level', '1') }}
                            @if($video->level == 1)
                                {{ Form::radio('level', '1', true) }}<br>
                            @else
                                {{ Form::radio('level', '1') }}<br>
                            @endif

                            {{ Form::label('level', '2') }}
                            @if($video->level == 2)
                                {{ Form::radio('level', '2', true) }}<br>
                            @else
                                {{ Form::radio('level', '2') }}<br>
                            @endif

                            {{ Form::label('level', '3') }}
                            @if($video->level == 3)
                                {{ Form::radio('level', '3', true) }}<br>
                            @else
                                {{ Form::radio('level', '3') }}<br>
                            @endif

                        </div>
                        <div class="form-group">
                            {{ Form::label('beschrijving', 'beschrijving') }}
                            {{ Form::textarea('name', $video->beschrijving, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('thumbnail', 'thumbnail') }}
                            {{ Form::file('name', null, array('class' => 'form-control')) }}
                        </div>

                        {{ Form::submit('Edit the video!', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

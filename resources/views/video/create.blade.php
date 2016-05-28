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

                        {!! Form::open(array('route' => 'video.store')) !!}

                        {!! Form::label('name', 'name') !!}
                        {!! Form::text('name') !!}

                        <br>
                        {!! Form::Label('cate_id', 'cate_id:') !!}
                        <select name="cate_id" id="name">
                            @foreach($categories as $data)
                                <option value="{{ $data->id }}" {{ (0 === $data->id ? ' selected="selected"' : '') }} rel="{{ $data->rel }}">{{ $data->name }}</option>
                            @endforeach
                        </select>

                        <br>

                        {!! Form::label('beschrijving', 'beschrijving') !!}
                        <br>
                        {!! Form::textarea('beschrijving') !!}
                        <br>

                        {!! Form::label('Product Image') !!}
                        {!! Form::file('image', null) !!}
                        <br>

                        {!! Form::submit('submit') !!}

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

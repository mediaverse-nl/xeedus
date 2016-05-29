@extends('layouts.app')

@section('title')
    courses
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">author</div>

                    <div class="panel-body">

                        <p>register as an author <a href="/">here</a></p>

                        {!! Form::open(array('route' => 'partner.store', 'files' => true)) !!}

                        {!! Form::label('name', 'name') !!}
                        {!! Form::text('name') !!}

                        <br>

                        {!! Form::label('beschrijving', 'beschrijving') !!}
                        <br>
                        {!! Form::textarea('beschrijving') !!}
                        <br>

                        {!! Form::label('Product Image', 'image') !!}
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

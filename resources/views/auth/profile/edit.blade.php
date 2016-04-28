@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">profile</div>

                    <div class="panel-body">

                @include('common.errors')


                {!! Form::open([
                    'method' => 'profile',
                    'route' => ['route', 'profile']
                ]) !!}

                {!! Form::label('voornaam', 'naam') !!}
                {!! Form::text('voornaam', Auth::user()->voornaam) !!}


                {!! Form::submit('Buy') !!}

                {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

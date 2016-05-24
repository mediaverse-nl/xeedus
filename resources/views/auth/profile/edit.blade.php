@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">profile as</div>

                    <div class="panel-body">



                    @include('common.errors')

                    {!! Form::open(array('action' => ['UserController@update'],'_method' => 'PUT')) !!}

                    {!! Form::label('voornaam', 'voornaam') !!}
                    {!! Form::text('voornaam', Auth::user()->voornaam) !!}
                        <br>

                    {!! Form::label('tussenvoegsel', 'tussenvoegsel') !!}
                    {!! Form::text('tussenvoegsel', Auth::user()->tussenvoegsel) !!}
                        <br>

                    {!! Form::label('achternaam', 'achternaam') !!}
                    {!! Form::text('achternaam', Auth::user()->achternaam) !!}
                        <br>

                    {!! Form::label('geslacht', 'geslacht') !!}
                    {!! Form::text('geslacht', Auth::user()->achternaam) !!}<br>

                    {!! Form::label('land', 'land') !!}
                    {!! Form::text('land', Auth::user()->land) !!}<br>

                    {!! Form::label('stad', 'stad') !!}
                    {!! Form::text('stad', Auth::user()->stad) !!}<br>

                    {!! Form::label('postcode', 'postcode') !!}
                    {!! Form::text('postcode', Auth::user()->postcode) !!}<br>

                    {!! Form::label('straatnaam', 'straatnaam') !!}
                    {!! Form::text('straatnaam', Auth::user()->straatnaam) !!}<br>

                    {!! Form::label('huisnummer', 'huisnummer') !!}
                    {!! Form::text('huisnummer', Auth::user()->huisnummer) !!}<br>

                    {!! Form::label('email', 'email') !!}
                    {!! Form::text('email', Auth::user()->email) !!}<br>


                    {!! Form::submit('edit') !!}

                    {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

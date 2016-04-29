@extends('layouts.app')

@section('title')
    credits
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">credits</div>

                    <div class="panel-body">


                        {!! Form::open(['route' => 'credits']) !!}

                        {!! Form::label('credits', '10') !!}
                        {!! Form::radio('credits', '10') !!}

                        {!! Form::label('credits', '20') !!}
                        {!! Form::radio('credits', '20') !!}

                        {!! Form::label('credits', '50') !!}
                        {!! Form::radio('credits', '50') !!}

                        {!! Form::submit('Buy') !!}

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

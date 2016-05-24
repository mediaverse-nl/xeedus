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

                        {!! Form::open(['route' => 'video_create']) !!}

                        {!! Form::label('name', 'name') !!}
                        {!! Form::text('name') !!}

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

                        {!! Form::submit('submit') !!}

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

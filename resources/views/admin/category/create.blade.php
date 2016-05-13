@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">admin index</div>
                <div class="panel-body">

                    <div>
                        <a href="{{ url('/admin/categories') }}">categories</a>
                        <a href="{{ url('/admin/videos') }}">videos</a>
                        <a href="{{ url('/admin/users') }}">users</a>
                        <a href="{{ url('/admin/') }}">ss</a>
                    </div>

                     {!! Form::open(['route' => 'StoreCategory']) !!}
                    {!! Form::label('name', 'name') !!}
                    {!! Form::text('name') !!}

                    {!! Form::Label('cate_id', 'cate_id:') !!}
                    <select class="" name="cate_id">
                        <option value="0">main</option>
                        @foreach($categories as $item)
                            <option value="{{$item->id}}">
                                    {{$item->name}}
                            </option>
                        @endforeach
                    </select>

                    {!! Form::submit('submit')!!}

                    {!! Form::close() !!}

                    {!! $categories !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

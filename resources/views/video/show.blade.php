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

                        <label>titel </label> {{ $video->name }}<br>
                        <label>poster </label>
                        <div style="height: 230px; width: 340px; border: 1px solid #333;">
                            {{ asset('storage/app/public/thumbnail/'.$video->thumbnail) }}


                        </div><br>
                        <label>description </label>{{ $video->beschrijving }}<br>
                        <label>price </label> {{ $video->prijs }}<br>
                        <label>level </label> {{ $video->level }}<br>
                        <label>made at </label> {{ $video->created_at }}<br>
                        <label>author </label> {{ $video->username }}<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @include('common.errors')

                <!-- New Task Form -->
                <form action="{{ url('/profile/edit/') }}" method="POST" class="form-horizontal">
                    {!! csrf_field() !!}

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">name</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" value="{{ Auth::user()->name }}" class="form-control">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Add Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

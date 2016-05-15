@if(isset($category))
    @foreach($category as $cate)
        <a href="{{ url('courses/'.str_replace(' ', '-', $cate->name)) }}">{{$cate->name}}</a><br>
    @endforeach

@endif
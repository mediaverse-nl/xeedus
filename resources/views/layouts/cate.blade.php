
{{--<ul class="menu dropdown-menu dropdown-menu-large row">--}}
    {{--@foreach($allSubCategories as $subCate)--}}
        {{--<li><a href="{{ url('courses/'.$subCate->name.'')  }}">{{ $subCate->name }}</a>--}}
            {{--<ul >--}}
                {{--@foreach($subCate->subCategory as $firstNestedSub)--}}
                    {{--<li class="sub"><a href="{{ url('courses/'.$firstNestedSub->name.'') }}">{{ $firstNestedSub->name }}</a></li>--}}
                {{--@endforeach()--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--@endforeach()--}}
{{--</ul>--}}

{{--@foreach($firstNestedSub->subCategory as $secondNestedSub)
    SecondNested : {{ $secondNestedSub->name }}<br>

    @foreach($secondNestedSub->subCategory as $thirdNestedSub)
        $thirdNested: {{ $thirdNestedSub->name }}
    @endforeach()

@endforeach()--}}

<style>
    ul.menu{ list-style:none;}

    ul.menu > li {
        float: left;
        margin-left: 1em;
        padding-bottom: 3em; /*make this the line-height space underneat the main menu, plus the heigh of the secondary menu, plus the extra space you wanna give the user to not lose focus on the second menu*/
    }
    ul.menu > li:first-child {margin-left: 0;}

    ul.menu > li > ul {
        display: none;
    }
    ul.menu> li:hover > ul {
        position: absolute;
        display: block;
        left: 0;
        list-style: none;
    }

    ul.menu > li:hover > ul > li,
    ul.menu > li > ul:hover > li {
        position: relative;
        float: left;
        margin-left: 1em;
    }
    ul.menu > li:hover > ul > li:first-child,
    ul.menu > li > ul:hover > li:first-child {margin-left: 0px}
</style>

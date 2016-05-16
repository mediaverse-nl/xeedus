

{{$orders->video()->get}}

@foreach($orders as $order)
    order id; {{$order->id}}<br>
    @foreach($order->video as $video)
        {{($video)}}
        @endforeach
@endforeach
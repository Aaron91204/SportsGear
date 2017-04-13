@extends('layouts.app')

@section('content')

@foreach ($products->chunk(4) as $items)
    <div class="row">
        @foreach ($items as $product)
            <div class="col-md-3">
                <div class="thumbnail">
                    <div class="caption text-center">
                        <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('images/' . $product->img) . '.jpg' }}" alt="product" class="img-responsive" style="height:150px;width"></a>
                        <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->product_name }}</h3>
                        <p>£{{ $product->cost }}</p>
                        </a>
                    </div> <!-- end caption -->
                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->
        @endforeach
    </div> <!-- end row -->
@endforeach

@endsection
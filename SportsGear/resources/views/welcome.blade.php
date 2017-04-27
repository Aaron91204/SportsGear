@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        <div class="jumbotron text-center clearfix">
            <h1>Sports Gear</h1>
            <p>We have a wide variety of items available to our customers</p>
            <p>Our categories range from Football to BasketBall</p>
            <p>To check out all our categories check out the shop section in the menu bar</p>
            <p>You must make an account before you are able to purchase our products</p>
            <p>Est. 2017</p>
        </div> <!-- end jumbotron -->

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

        
    </div>
@endsection
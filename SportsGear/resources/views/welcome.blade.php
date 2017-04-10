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
            <h2>This will be the Home Page</h2>
            <p>Here we'll have a selection of products (picked at random) to display to the customer.</p>
            <p>For now, we'll just have the full list of products
            </p>
        </div> <!-- end jumbotron -->

        @foreach ($products->chunk(4) as $items)
            <div class="row">
                @foreach ($items as $product)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('product', [$product->product_name]) }}"><img src="{{ asset('images/' . $product->img) . '.jpg' }}" alt="product" class="img-responsive"></a>
                                <a href="{{ url('product', [$product->product_name]) }}"><h3>{{ $product->product_name }}</h3>
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
  <!-- <div class="title">
            Database Work
            <div>


            @if(empty($products))
                <h5>There are no Products</h5>
            @else
            <h5>Product deets</h5>

            <ul>
            @foreach($products as $product)
                <li>{{$product->product_name}}</li>
                <li>{{$product->cost}}</li>
            @endforeach
            </ul>
            @endif
            </div>
        </div> -->
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
            <h2>Categories</h2>
            <p>Categories List</p>
            
        </div> <!-- end jumbotron -->

        @foreach ($products->chunk(4) as $items)
            <div class="row">
                @foreach ($items as $product)
                    <div class="col-md-3">
                        <div class="thumbnail text-center" style="position:relative;">
                            <img src="{{ asset('images/' . $product->category . '.jpg') }}" alt="product" class="img-responsive">
                            <div class="caption " style="position:absolute;top: 45%;left: 0;width: 100%;"">
                                
                                <h3><a href="{{ url('shop/categories', [$product->category]) }}" style="color:white;text-shadow: 2px 2px 4px #000000;">{{ $product->category}}</a></h3>
                                
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

        
    </div>
@endsection
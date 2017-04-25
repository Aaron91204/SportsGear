@extends('layouts.staffArea')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/juery.min.js"></script> 
<meta name="csrf-token" content="{{ csrf_token() }}" />
	<div class="container">
	       <div class="panel panel-default">
                        <div class="panel-heading">Update Products</div>
                	       <div class ="panel-body">
                	       <p>Here is where staff members can update products. </p>
                                <p>Choose a category from the options below </p>
                	       <br>
                                <br>
       @foreach ($products->chunk(4) as $items)
            <div class="row">
                @foreach ($items as $product)
                    <div class="col-md-3">
                        <div class="thumbnail text-center" style="position:relative;">
                            <img src="{{ asset('images/' . $product->category . '.jpg') }}" alt="product" class="img-responsive">
                            <div class="caption " style="position:absolute;top: 45%;left: 0;width: 100%;"">
                                
                                <h3><a href="{{ url('staff/updateProducts') }}" style="color:white;text-shadow: 2px 2px 4px #000000;">{{ $product->category}}</a></h3>
                                
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

              
	</div>
	</div>
@endsection
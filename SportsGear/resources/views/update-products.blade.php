@extends('layouts.staffArea')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
	<div class="container">
		<div class="row">
	 		<div class="panel panel-default">
          <div class="panel-heading">Update Products</div>
              <div class="panel-body">
                  <div class="container">
                    @foreach ($product->chunk(3) as $items)
                      <div class="row">
                        @foreach ($items as $product)
                          <div class="col-md-4">
                            <div class="thumbnail">

                              <form action="{{url('staff/updateProd')}}" method="POST">
                              {!! csrf_field() !!}
                                <div class="caption text-center">
                                  <div class="form-group">
                                    <img src="{{ asset('images/' . $product->img . '.jpg') }}" alt="product" class="img-responsive">
                                  </div>

                                  <div class="form-group">
                                    <p><label>ID:</label><input type="text" name="id" value="{{$product->id}}"></p>
                                  </div>

                                  <div class="form-group">
                                    <p><label>Product Name:</label><input type="text" name="product_name" value="{{$product->product_name}}"></p>
                                  </div>

                                  <div class="form-group">
                                    <p><label>Category:</label><input type="text" name="category" value="{{$product->category}}"></p>
                                  </div>

                                  <div class="form-group">
                                    <p><label>Quantity:</label><input type="text" name="quantity" value="{{$product->quantity}}"></p>
                                  </div>

                                  <div class="form-group">
                                    <p><label>Cost:</label><input type="text" name="cost" value="{{$product->cost}}"></p>
                                  </div>

                                  <div class="form-group">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-primary" value="Update">
                              
                              </div>
                            </form>
                         </div> <!-- end caption -->
                       </div> <!-- end thumbnail -->
                     </div> <!-- end col-md-3 -->
                 @endforeach
               </div> <!-- end row -->
               </div>
           @endforeach

@endsection
@extends('layouts.staffArea')

@section('content')
<div class="container">

<div class="jumbotron text-center clearfix">
@foreach($products as $index => $product)
    @if ($index == 0)
        <h2>{{$product->category}} Products </h2>
    @endif
    
@endforeach
</div>
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">Your Details</h4>
      </div>
      <div class="modal-body">
        <p>
        Are you sure that you want to change these details?
       </p>

      </div>

      <div class="col-md-6">
      <label for="firstname" class="col-md-4 control-label">First Name</label>
                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{Auth::user()->firstname}}">
                </div>
      <div class="col-md-6">
      <label for="firstname" class="col-md-4 control-label">Surname</label>
                  <input id="surname" type="text" class="form-control" name="surname" value="{{Auth::user()->surname}}" >
                </div>
      <div class="col-md-6">
      <label for="firstname" class="col-md-4 control-label">Email</label>
                  <input id="email" type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
                </div>
      <div class="col-md-6">
      <label for="firstname" class="col-md-4 control-label">Address</label>
                  <input id="address" type="text" class="form-control" name="address" value="{{Auth::user()->address}}">
                </div>
      <div class="col-md-6">
      <label for="firstname" class="col-md-4 control-label">Postcode</label>
                  <input id="postcode" type="text" class="form-control" name="postcode" value="{{Auth::user()->postcode}}">
                </div>
      <div class="col-md-6">
      <label for="firstname" class="col-md-4 control-label">Telephone</label>
                  <input id="telephone" type="text" class="form-control" name="telephone" value="{{Auth::user()->telephone}}">
                </div>


      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Review Details</button>
        <span class="pull-right">
          <form action="{{ url('/') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-primary" value="Update">
            </form>
        </span>
      </div>
    </div>
  </div>
</div>
<table id="orders" class="table table-striped table-inverse">
    <thead>
        <tr id='tableHeader'>
            <td>ID</td>
            <td>Product Name</td>
            <td>Slug</td>
            <td>Quantity</td>
            <td>Cost (£)</td>
        </tr>
    </thead>
    <tbody>
        
            @foreach ($products as $product)

                
                <tr>

                <form action="{{ url('staff/storeUpdateProduct', [$product->id]) }}" method="POST" class="side-by-side">
                            {!! csrf_field() !!}
                    <td><input id="{{ $product->id}}" type="text" class="form-control" name="id[{{ $product->id}}]" value="{{ $product->id }}" readonly></td>

                    <td><input id="product_name[{{ $product->id}}]" type="text" class="form-control" name="product_name[{{ $product->id}}]" value="{{ $product->product_name }}"></td>

                    <td><input id="slug[{{ $product->id}}]" type="text" class="form-control" name="slug[{{ $product->id}}]" value="{{ $product->slug }}"></td>

                    <td><input id="quantity[{{ $product->id}}]" type="number" min="0" class="form-control" name="quantity[{{ $product->id}}]" value="{{ $product->quantity}}"></td>

                    <td><input id="cost[{{ $product->id}}]" type="number" step="0.01" min="0" class="form-control" name="cost[{{ $product->id}}]" value="{{ $product->cost }}"></td>
                    <td>
                        

                            <input type="submit" class="btn btn-sm" value="Update">
                        
                    </td>
                    </form> 

                </tr> 
            @endforeach
        
    </tbody>
</table>

</div>

@endsection


                            
                            
                            
                                
                            
                            
                        
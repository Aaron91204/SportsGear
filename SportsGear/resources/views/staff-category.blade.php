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


                            
                            
                            
                                
                            
                            
                        
@extends('layouts.staffArea')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
	<div class="container">
		<div class="row">
	 		<div class="panel panel-default">
                <div class="panel-heading">Update Products</div>
                	<div class ="panel-body">
                	Here is where staff members can update products
                	<br>
                	<input id="search" onkeyup='searchforCategory()' type="text" class="form-control" placeholder="Search by Category">
                		<br>
                		<table id="products" class="table table-striped table-inverse">
                			<thead>
                			<tr id="tableHeader">
                				<td>ID</td>
                				<td>Product Name</td>
                				<td>Category</td>
                				<td>Quantity</td>
                				<td>Cost</td>
                			</tr>
                			</thead>

                			<tbody>
                			@foreach($products as $product)
                			<form action="{{url('staff/updatePrd')}}" method="POST">
                				<tr>
                					<td><input id = "id" type="text" class ="form-control" name ="id" value="{{$product->id}}"</td>
                					<td><input id="product_name" type="text" class="form-control" name="product_name" value="{{$product->product_name}}"</td>
                					<td><input id="category" type="text" class="form-control" name="category" value="{{$product->category}}"</td>
                					<td><input id="quantity" type="text" class="form-control" name="quantity" value="{{$product->quantity}}"</td>
                					<td><input id="cost" type="text" class="form-control" name="cost" value="£{{$product->cost}}"</td>
                				<tr>
                			@endforeach

                		</tbody>
                	</table>
                	<div class="form-group">
                		<div class="col-md-6">
                		{!! csrf_field() !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                	<input type="submit" class="btn btn-primary" value="Update">
                	</div>
                	</div>
                	</form>
                </div>
	</div>
	</div>
@endsection
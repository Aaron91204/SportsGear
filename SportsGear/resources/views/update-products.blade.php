@extends('layouts.staffArea')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/juery.min.js"></script> 
<meta name="csrf-token" content="{{ csrf_token() }}" />
	<div class="container">
		<div class="row">
	 		<div class="panel panel-default">
                <div class="panel-heading">Update Products</div>
                	<div class ="panel-body">
                	Here is where staff members can update products
                	<br>
                        <br>
                        
                        <div class="container">
                                <span>Product Category:</span>
                                 <select name="value" onchange="#"" class="category" id="productcategory">
                                        <option value="0" disabled="true"selected="true">Select</option>
                                                @foreach($prodCategory as $cat)
                                                        <option value="{{$cat->category}}">{{$cat->category}}</option>
                                                @endforeach
                                </select>
                        </div>   
                              

                        <br>
                      
                       <form>
                           <table id="products" class="table table-striped">
                                <thead>
                                        <tr id='tableHeader'>
                                                <td>Product ID</td>
                                                <td>Product Name</td>
                                                <td>Category</td>
                                                <td>Quantity</td>
                                                <td>Cost</td>
                                </thead>
                       @foreach($products as $product)
                       <tr>
                       
                                <td><input id="id" type="text" value="{{$product->id}}"</td>
                                <td><input id="product_name" type="text" value="{{$product->product_name}}"</td>
                                <td><input id="category" type="text" value="{{$product->category}}"</td>
                                <td><input id="quantity" type="text" value="{{$product->quantity}}"</td>
                                <td><input id="cost" type="text" value="£{{$product->cost}}"</td>
             
                       </tr>
                       @endforeach
                       </tbody>
                       </table>
                       </form>
                      <script>
                        </div>
                       
	</div>
	</div>
@endsection
@extends('layouts.staffArea')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order</div>

                <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <td>Order ID</td>
                        <td>Customer Name</td>
                        <td>Address</td>
                        <td>Telphone #</td>
                        <td>Email</td>
                        <td>Total Cost</td>
                        <td style="width:30%">Products And Quantity</td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $firstname = App\User::select('firstname')->where('id', '=', $order->customer_id)->get();
                    $surname = App\User::select('surname')->where('id', '=', $order->customer_id)->get();
                    $address = App\User::select('address')->where('id', '=', $order->customer_id)->get();
                    $telephone = App\User::select('telephone')->where('id', '=', $order->customer_id)->get();
                    $email = App\User::select('email')->where('id', '=', $order->customer_id)->get();
                    $products = App\Product::all();
                    $productOrders = App\ProductOrder::all();
                    $id = $order->id; 
                    $customer_id = $order->customer_id;
                    $totalCost = $order->totalCost;
                 ?>
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $firstname[0]->firstname . ' ' . $surname[0]->surname }}</td>
                        <td>{{ $address[0]->address }}</td>
                        <td>{{ $telephone[0]->telephone  }}</td>
                        <td>{{ $email[0]->email }}</td>
                        <td>£{{ $totalCost }}</td>
                        
                        <td>
                            <table>
                            <tbody>


                                @foreach ($productOrders as $productorder)
                                        <?php
                                        
                                        $productid = $productorder->product_id;
                                        $productquant = $productorder->quantity;
                                        ?>
                                        @foreach ($products as $product)
                                            @if ($product->id == $productorder->product_id)
                                            @if ($productorder->order_id == $id)
                                                <?php $productname = $product->product_name; ?>
                                                <tr><td> {{ $productname }} * {{ $productquant }}</td></tr>
                                            @endif
                                            @endif
                                        @endforeach
                                        

                                @endforeach
                            </tbody>
                                

                            </table>
                        </td>
                        

                    </tr>
                </tbody>

                </table>
                </div>
                </div>


                    <?php 
                    
                    

/*
for each with the id table with customer name, customer id, order id, order cost order
then subtable with productsOrer
productname + quantity 

*/
                     ?>
              

              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
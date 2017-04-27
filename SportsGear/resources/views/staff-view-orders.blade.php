@extends('layouts.staffArea')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Orders</div>

                <div class="panel-body">
                        <input id='mySearch' onkeyup='searchForID()' type='text' class="form-control" placeholder="Search By ID Number">
                        <table id="orders" class="table table-striped table-inverse">
                            <thead>
                                <tr id='tableHeader'>
                                    <td>ID</td>
                                    <td>Customer ID</td>
                                    <td>Customer Name</td>
                                    <td>Total Cost</td>
                                    <td>View Order</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <?php

                                $firstname = App\User::select('firstname')->where('id', '=', $order->customer_id)->get();
                                $surname = App\User::select('surname')->where('id', '=', $order->customer_id)->get();
                                $products = App\Product::all();
                                $productOrders = App\ProductOrder::all();

                            ?>
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{$order->customer_id}}</td>
                                    <td>{{ $firstname[0]->firstname . ' ' . $surname[0]->surname}}</td>
                                    <td>£{{ $order->totalCost }}</td>
                                    <td><a href="{{ route('staff.show', $order->id) }}" class="btn btn-default btn-sm">View</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <script>
                            function searchForID() { 
                            var search, filter, found, table, tr, td, i, j;
                            search = document.getElementById("mySearch");
                            uppercaseSearch = search.value.toUpperCase();
                            table = document.getElementById("orders");
                            
                            tr = table.getElementsByTagName("tr");


                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td");
                                if (td[0].innerHTML.toUpperCase().indexOf(uppercaseSearch) > -1) {
                                    found = true;
                                    }
                                if (found) {
                                    tr[i].style.display = "";
                                    tr[0].style.display = "";
                                    found = false;
                                } else {
                                    tr[i].style.display = "none"; 
                                }

                            } 
                        }
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
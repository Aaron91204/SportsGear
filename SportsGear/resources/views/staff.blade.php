@extends('layouts.staffArea')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Staff Area</div>

                <div class="panel-body">
                    In this area, staff may perform various actions
                    <br/>
                    <hr/>
                    <ul>
                        <li>Update their account details</li>
                        <li>View and search customer order history</li>
                        <li>Add new staff members</li>
                        <li>View queries submitted by customers on the 'contact us' form</li>
                        <li>Update existing product details</li>
                    </ul>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
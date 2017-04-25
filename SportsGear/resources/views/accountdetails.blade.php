@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="container">
    <div class="panel panel-default">
        <div class ="panel-heading">Account Details</div>
          <div class ="panel-body">
          Here you can view your account details and update your details if needed.
          <br>
          <br>
          <form action="{{ url('update') }}" method ="POST">
            <div class="form-group">
              <label for="firstname" class="col-md-4 control-label">First Name</label> <!--first name label -->
                <div class="col-md-6">
                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{Auth::user()->firstname}}">
                </div>
            </div>

            <div class="form-group">
              <label for="surname" class="col-md-4 control-label">Surname</label>
                <div class="col-md-6">
                  <input id="surname" type="text" class="form-control" name="surname" value="{{Auth::user()->surname}}" >
                </div>
            </div>

            <div class="form-group">
              <label for="address" class="col-md-4 control-label">Email</label>
                <div class="col-md-6">
                  <input id="email" type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
                </div>
            </div>

             <div class="form-group">
              <label for="address" class="col-md-4 control-label">Address</label>
                <div class="col-md-6">
                  <input id="address" type="text" class="form-control" name="address" value="{{Auth::user()->address}}">
                </div>
            </div>

            <div class="form-group">
              <label for="postcode" class="col-md-4 control-label">Postcode</label>
                <div class="col-md-6">
                  <input id="postcode" type="text" class="form-control" name="postcode" value="{{Auth::user()->postcode}}">
                </div>
            </div>

              <div class="form-group">
              <label for="telephone" class="col-md-4 control-label">Telephone</label>
                <div class="col-md-6">
                  <input id="telephone" type="text" class="form-control" name="telephone" value="{{Auth::user()->telephone}}">
                </div>
            </div>
            <button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Update Information
</button>
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

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="panel panel-default">
        <div class ="panel-heading">Your Orders</div>
          <div class ="panel-body">
          Here you can view your orders
          <br>
          <br>
          <form action="{{ url('update') }}" method ="POST">
            <div class="form-group">
              <label for="firstname" class="col-md-4 control-label">Order ID</label> <!--first name label -->
                <div class="col-md-6">
                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{Auth::user()->firstname}}">
                </div>
            </div>

            <div class="form-group">
              <label for="surname" class="col-md-4 control-label">Total Cost</label>
                <div class="col-md-6">
                  <input id="surname" type="text" class="form-control" name="surname" value="{{Auth::user()->surname}}" >
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
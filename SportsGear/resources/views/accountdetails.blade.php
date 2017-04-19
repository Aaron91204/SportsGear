@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class ="panel-heading">Account Details</div>
          <div class ="panel-body">
          Here you can view your account details and update your details if needed.
          <br>
          <br>
          <form action="update()" method ="post">
            <div class="form-group">
              <label for="firstname" class="col-md-4 control-label">First Name</label> <!--first name label -->
                <div class="col-md-6">
                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{Auth::user()->firstname}}">
                </div>
            </div>
            <div class="form-group">
              <label for="surname" class="col-md-4 control-label">Surname</label>
                <div class="col-md-6">
                  <input id="email" type="text" class="form-control" name="email" value="{{Auth::user()->surname}}" >
                </div>
            </div>
             <div class="form-group">
              <label for="address" class="col-md-4 control-label">Address</label>
                <div class="col-md-6">
                  <input id="email" type="text" class="form-control" name="address" value="{{Auth::user()->address}}">
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
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <input type="submit" class="btn btn-primary"value="Update">
                    </div>
                </div>
            </form>
            </div>
</div>
</div>
</div>
@endsection
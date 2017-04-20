@extends('layouts.staffArea')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="container">
    <div class="panel panel-default">
        <div class ="panel-heading">Account Details</div>
          <div class ="panel-body">
          Here you can view your account details and update your details if needed.
          <br>
          <br>
          <form action="{{ url('staff/update') }}" method ="POST">
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
@endsection
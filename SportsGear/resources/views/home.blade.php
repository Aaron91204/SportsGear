@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Account</div>

                <form action="{{url('submit')}}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <div class="panel-body">
                        You are logged in!
                        <br>
                        <br>
                        <br>
                        Contact Us Form
                        <br>
                        If you have any questons for us please feel free to use the following form to contact us
                        <br>
                        <br>
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label for="firstname" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                                <label for="firstname" class="col-md-4 control-label">Please enter your question</label>

                                <div class="col-md-6">
                                    <textarea name="question" cols="50" rows="10" required autofocus></textarea>

                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">

                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

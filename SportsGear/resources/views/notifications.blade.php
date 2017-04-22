@extends('layouts.staffArea')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Notifications</div>

                <div class="panel-body">
                        
                        <table id="notifications" class="table table-striped table-inverse">
                            <thead>
                                <tr id='tableHeader'>
                                    <td><strong>ID</strong></td>
                                    <td><strong>Customer Name</strong></td>
                                    <td><strong>Customer Email</strong></td>
                                    <td><strong>Message</strong></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($notifications as $notification)
                                <tr>
                                    <td>{{ $notification->id }}</td>
                                    <td>{{ $notification->firstname}}</td>
                                    <td>{{ $notification->email}}</td>
                                    <td>{{ $notification->question }}</td>
                                    <td><form action="{{ url('staff/clear', [$notification->id]) }}" method="POST" class="side-by-side">
                                            {!! csrf_field() !!}

                                            <input type="submit" class="btn btn-sm" value="Clear">
                                        </form> 
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
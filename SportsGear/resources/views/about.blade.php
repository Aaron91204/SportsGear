
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">About Us</div>

                <div class="panel-body">
                <h2> Sports Gear Established 2016<h2>
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Modern_warehouse_with_pallet_rack_storage_system.jpg" alt="Mountain View" style="width:304px;height:228px; margin-bottom: 30px;float:right;">
                <h4 style="margin-bottom: 20px;"> Sports Gear Ltd is a direct to consumer sporting goods store that was established to bring the best sports equipment to its customers at a reasonable price. It was founded by John Smith in 2016 in Belfast, Northern Ireland and has a commitment to robust, reliable and quality sporting goods, and providing them with excellent customer service. Sports Gear Ltd operates out of a brand new packaging warehouse where our staff work tirelessly to ensure that you get the products you want exactly when you need them</h4>

                
                <div class="panel-heading" style=""><b>Where are we located?</b></div>

                
                <h5>8 Wall St,
                Belfast,
                Antrim,
                BT13 1BS<h5>
    <div id="map" style="height: 400px;width: 600px; position: center;"></div>
    <script>
      function initMap() {
        var uluru = {lat: 54.605216, lng:  -5.934486};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqlWkUiMJdyv5IJYc-kjOS9zPjrf-7ZIY&callback=initMap">
    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    

<!doctype html>
    <html>
        <head>
@include('layouts.head')
    <style>

        <style>

        body {
          font-family: "Helvetica Neue", Helvetica, Arial;
          font-size: 14px;
          line-height: 20px;
          font-weight: 400;
          color: #3b3b3b;
          background: #2b2b2b;
        }

        .wrapper {
          margin: 0 auto;
          max-width: 800px;
        }

        .table {
          margin: 0 0 40px 0;
          width: 100%;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
          display: table;
        }
        @media screen and (max-width: 580px) {
          .table {
            display: block;
          }
        }

        .row {
          display: table-row;
          background: #f6f6f6;
        }
        .row:nth-of-type(odd) {
          background: #e9e9e9;
        }
        .row.header {
          font-weight: 900;
          color: #ffffff;
          background: #ea6153;
        }
        .row.blue {
          background: #2980b9;
        }
        @media screen and (max-width: 580px) {
          .row {
            padding: 8px 0;
            display: block;
          }
        }

        .cell {
          padding: 6px 12px;
          display: table-cell;
        }
        @media screen and (max-width: 580px) {
          .cell {
            padding: 2px 12px;
            display: block;
          }
        }

        #row1{
                display:flex;
                flex-direction:row;
                justify-content: space-around;
            }

            #column1{
                display:flex;
                flex-direction:column;

            }


            #column2{
                display:flex;
                flex-direction:column;
            }
        #map {
            width: 600px;
        height: 600px;
      }
        input {
            font-size: medium;
    width: 100%;
    background: white;
        }


    </style>
</head>
        <body>
@include('layouts.nav')
            <style>
            .nav-link img {
            float: left;
            position: relative;
            width: 40px;
            height: 40px;
            top: -10px;
            left: -17px;
        }
                </style>
            <div id="row1">
    <div id="column1">

            <div class="form-content">
                <div class="sub-form2">
                    <div class="sub-1">
                        @foreach($title as $title)
                        <h2>{{$title->name}}</h2>
                        @endforeach
                           @foreach($locale as $locale)
                        <input class="input" id="address" value="{{$locale->location}}" readonly>
                            @endforeach
                        <div id="map"></div>
                        <body onload="codeAddress()">
                        <div>

                        </div>
                        </body>
                    </div>
                </div>
            </div>
          </div>
        <div id="column2">
                <div class="form-content">
                <div class="sub-form">
                    <div class="sub-1">
                        <h2>Open Hours:</h2>
                        <div class="wrapper">
                            <div class="table">
                                <div class="row header blue">
                                    <div class="cell">Day</div>
                                    <div class="cell">Open</div>
                                    <div class="cell">Close</div>
                                </div>
                                @foreach($business as $business)
                                    <div class="row">
                                        @if ($business->day == 0)
                                            <div class="cell">Sunday</div>
                                        @elseif ($business->day == 1)
                                            <div class="cell">Monday</div>
                                        @elseif ($business->day == 2)
                                            <div class="cell">Tuesday</div>
                                        @elseif ($business->day == 3)
                                            <div class="cell">Wednesday</div>
                                        @elseif ($business->day == 4)
                                            <div class="cell">Thursday</div>
                                        @elseif ($business->day == 5)
                                            <div class="cell">Friday</div>
                                        @elseif ($business->day == 6)
                                            <div class="cell">Saturday</div>
                                        @endif
                                        <div class="cell">{{$business->start}}</div>
                                        <div class="cell">{{$business->end}}</div>
                                    </div>
                                @endforeach

                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<script>
      var geocoder;
  var map;
  function initMap() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var mapOptions = {
      zoom: 8,
      center: latlng
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
  }

  function codeAddress() {
    var address = document.getElementById('address').value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
          map.setZoom(17);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuluR2Pm_Y1ui-j_piCpHGyydCehv9KHs&callback=initMap">
    </script>
        </body>
    </html>

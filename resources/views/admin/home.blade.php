<!doctype html>
<html>
<head>
@include('layouts.head')
    <link href="{{ asset('FullCalendar/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
            <script src="{{ asset('FullCalendar/jquery/dist/jquery.js') }}"></script>
            <script src="{{ asset('FullCalendar/moment/min/moment.min.js') }}"></script>
            <script src="{{ asset('FullCalendar/fullcalendar/dist/fullcalendar.js') }}"></script>
   
            <script>
         $(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'listMonth,listWeek,listDay'
			},
			defaultView: 'listWeek',
			editable: true,
            })

        });
            </script>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
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
          padding: 40px;
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
    </style>
</head>
<body>
@include('layouts.navAdmin') 
<div class="form-content">
    <div class="sub-form">   
      <div class="sub-1">
          <a>Welcome</a>
          <h2>All Bookings</h2>
       </div>           
          <div class="wrapper">
              <div class="table">
                  <div class="row header blue">
                      <div class="cell">Customer</div>
                      <div class="cell">Date</div>
                      <div class="cell">Employee</div>
                      <div class="cell">Start Time</div>
                      <div class="cell">End Time</div>
                  </div>
          @foreach ($bookings as $booking)
                  <div class="row">
                      <div class="cell">{{$booking->name}}</div>
                      <div class="cell">{{$booking->date}}</div>
                      <div class="cell">{{$booking->employee_name}}</div>
                      <div class="cell">{{$booking->start}}</div>
                      <div class="cell">{{$booking->end}}</div>
                  </div>
      	@endforeach
              </div>    
        </div>
        <div id='calendar' style="background-color:white;"></div>
    </div>
</div>
@include('layouts.foot')

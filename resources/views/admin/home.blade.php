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
            navLinks: true,
            eventLimit: true,
            events: [
                @foreach ($bookings as $booking)
				{
					title: '{{$booking->name}} with {{$booking->employee_name}}',
					start: '{{$booking->date}}T{{$booking->start}}',
                    end: '{{$booking->date}}T{{$booking->end}}',
				},
                @endforeach
			]
            })

        });
            </script>
</head>
<body>
@include('layouts.navAdmin') 
<div class="form-content">
    <div class="sub-form">   
      <div class="sub-1">
          <a>Welcome</a>
          <h2>All Bookings</h2>
       </div>           
          
        
        <div id='calendar' style="background-color:white;"></div>
    </div>
</div>
@include('layouts.foot')

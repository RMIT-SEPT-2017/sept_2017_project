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
				right: 'month,listMonth,listWeek,listDay'
			},
			defaultView: 'listWeek',
			editable: true,
            navLinks: true,
            eventLimit: true,
            events: [
                @foreach ($employeeTimes as $employeeTimes)
                {
                title:'{{$employeeTimes->employee_name}}',
                start: '{{$employeeTimes->start}}', // a start time (10am in this example)
                end: '{{$employeeTimes->end}}', // an end time (2pm in this example)
                dow: [ {{$employeeTimes->day}} ], // Repeat monday and thursday
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
          <h2>Employee availability</h2>
       </div>           

                <div id='calendar' style="background-color:white;"></div>
                <div class="sub">
<a href="{{ url('/add_employee_times') }}"><input type="changea" value="Add new availability">
                    </div>
    </div>
</div>
    
@include('layouts.foot')


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
				right: 'month,agendaWeek,agendaDay'
			},
			defaultView: 'agendaWeek',
			editable: true,
            })

        });
            </script>
        </head>
        <body>
@include('layouts.nav')
        <div class="form-content">
            <div class="sub-form"> 
            <div id='calendar' style="background-color:white;"></div>
                </div>
            </div>
        </body>
    </html>



<!doctype html>
    <html>
        <head>
<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <link href="<?php echo e(asset('FullCalendar/fullcalendar/dist/fullcalendar.min.css')); ?>" rel="stylesheet">
            <script src="<?php echo e(asset('FullCalendar/jquery/dist/jquery.js')); ?>"></script>
            <script src="<?php echo e(asset('FullCalendar/moment/min/moment.min.js')); ?>"></script>
            <script src="<?php echo e(asset('FullCalendar/fullcalendar/dist/fullcalendar.js')); ?>"></script>
   
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
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="form-content">
            <div class="sub-form"> 
            <div id='calendar' style="background-color:white;"></div>
                </div>
            </div>
        </body>
    </html>


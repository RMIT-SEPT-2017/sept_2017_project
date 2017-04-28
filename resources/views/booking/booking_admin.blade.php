<!--ADMIN-->
<!doctype html>
<html>
<head>
@include('layouts.head')


<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bookings</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 0px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
        .form-horizontal .control-label {
        padding-top: 7px;
        margin-bottom: 0;
        text-align: right;
        color: #333;
        font-size: small;
    }
    #error{
    	color: red;
    	text-align: center;
    }
    input#time {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
    </style>
</head>
<body>
@include('layouts.navAdmin') 
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
               
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="{{ action('BookingController@addBooking') }}">
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			  <div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Employee</label>
					<div class="col-sm-10">
					  <select name="employee_id" class="form-control" id="employee_id" required>
						  <option value="">Choose</option>
						 <?php foreach($employees as $employee):

						 	echo '<option value="'.$employee->id.'">'.$employee->employee_name.'</option>';
						 endforeach; ?>
						  
						</select>
					</div>
				  </div>



				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Customer</label>
					<div class="col-sm-10">
					  <select name="customer_id" class="form-control" id="customer_id" required>
						  <option value="">Choose</option>
						 <?php foreach($customers as $customer):

						 	echo '<option value="'.$customer->id.'">'.$customer->name.'</option>';
						 endforeach; ?>
						  
						</select>
					</div>
				  </div>

				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Service</label>
					<div class="col-sm-10">
					  <select name="service_id" class="form-control" id="service_id" required>
						  <option value="">Choose</option>
						 <?php foreach($services as $service):

						 	echo '<option value="'.$service->id.'">'.$service->title.': '.$service->duration.' min</option>';
						 endforeach; ?>
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="date" class="col-sm-2 control-label">Date</label>
					<div class="col-sm-10">
					  <input type="text" name="date" class="form-control" id="date" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="time" class="col-sm-2 control-label">Time</label>
					<div class="col-sm-10">
					  <input type="time" step="900" value="09:00" name="time" id="time"> <!-- 5 min step -->
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  @foreach ($services as $service)
						  	<option value="{{$service->title}}">{{$service->title}}: {{$service->duration}} min</option>
						  @endforeach
						</select>
					</div>
				  </div>
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		<div>
			<label id="error">
				<?php
				if(isset($_GET['error'])) {
					if( $_GET["error"]=='InPast') {
				      echo "*Sorry the date/time you entered was in the past.";
				   	}
				   	if( $_GET["error"]=='EmployeeNotAvailable') {
				      echo "*Sorry the employee use selected is not available at that time.";
				   	}
				   	if( $_GET["error"]=='Overlap') {
				      echo "*Sorry the employee use selected is not available as they are busy.";
				   	}
				}
			   	?>
			</label>
		</div>
    </div>

    <!-- /.container -->
	
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #date').val(moment(start).format('YYYY-MM-DD'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},

			events: [
			<?php foreach($bookings as $booking): 
			
				$start = explode(" ", $booking->estart);
				$end = explode(" ", $booking->eend);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $booking->estart;
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $booking->eend;
				}
			?>
				{
					id: '<?php echo $booking->id; ?>',
					title: '<?php echo $booking->title.": ".$booking->name." with ".$booking->employee_name; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '#<?php echo $booking->color; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.'); 
					}
				}
			});
		}
		
	});
	
</script>



@include('layouts.foot')
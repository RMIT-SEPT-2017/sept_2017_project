<!doctype html>
<html>
<head>
     @include('layouts.head')

</head>
<body>
    @include('layouts.nav')
<script>

webshim.setOptions('forms-ext', {
    replaceUI: 'auto',
    types: 'date',
    date: {
        startView: 2,
        inlinePicker: true,
        classes: 'hide-inputbtns'
    }
});
webshim.setOptions('forms', {
    lazyCustomMessages: true
});
webshim.polyfill('forms forms-ext');

</script>
<style>
.ws-validate{
	float:left;
}
.hide-replaced{
	float: left;
}
.booking-wrapper{
	float: left;
	width: 100%;
}
.times-wrapper{
	float: left;
	width: 600px;
	height: 600px;
}
.booking-day{
	float: left;
	width: 100px;
	height: 550px;
}
.booking-line{
	width: 2px;
	height: 490px;
	background-color: #DDD;
	margin-left: 80px;
}
</style>
	<body>
		<div class="booking-wrapper">
		<form action="{{ action('BookingController@update') }}" method="GET" class="ws-validate" id="calendar">
			<div class="form-row">
			    <input type="date" class="hide-replaced" name="date"/>
			</div>
			<div class="form-row">
			    <input type="submit" />
			</div>
			</form>
			<div class="times-wrapper">
			<?php  $j = 0; ?>
			@foreach ($days as $availableTimes)
			
				<div class="booking-day">
					<label>{{$dayLabels[$j]}}</label>
					<ul class="booking-time">
						<?php  $i = 0; ?>

						@foreach ($times as $time) 
							<li>
								<input type="radio" name="bookingTime" value="{{$time}}" id="{{$time}}" <?php if(!$availableTimes[$i]) echo 'disabled'; $i++;?>/>    
								<label for="{{$time}}">{{$time}}</label>  	
							</li>
					    @endforeach
					</ul>
					<div class="booking-line"></div>
				</div>
			<?php  $j++; ?>
		
		@endforeach
		</div>
	</div>
@include('layouts.foot')

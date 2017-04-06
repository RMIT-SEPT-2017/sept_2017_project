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

	<body>
		<div>
		<form action="{{ action('BookingController@update') }}" method="GET" class="ws-validate">
			<div class="form-row">
			    <input type="date" class="hide-replaced" name="date"/>
			</div>
			<div class="form-row">
			    <input type="submit" />
			</div>
			</form>
		</div>
		<div>
		<ul class="booking-time">
			<?php  $i = 0; ?>
			@foreach ($times as $time) 
				<li>
					<input type="radio" name="bookingTime" value="{{$time}}" id="{{$time}}" <?php if(!$availableTimes[$i]) echo 'disabled'; $i++;?>/>    
					<label for="{{$time}}">{{$time}}</label>  	
				</li>
		    @endforeach
		</ul>
	</div>
@include('layouts.foot')

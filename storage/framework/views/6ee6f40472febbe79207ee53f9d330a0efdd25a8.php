<!doctype html>
<html>
<head>
     <?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>
<body>
    <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
		<form action="<?php echo e(action('BookingController@update')); ?>" method="GET" class="ws-validate" id="calendar">
			<div class="form-row">
			    <input type="date"  name="date" id="datepicker"/>
			</div>
			<div class="form-row">
			    <input type="submit" />
			</div>
			</form>
			<div class="times-wrapper">
			<?php  $j = 0; ?>
			<?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availableTimes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			
				<div class="booking-day">
					<label><?php echo e($dayLabels[$j]); ?></label>
					<ul class="booking-time">
						<?php  $i = 0; ?>

						<?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
							<li>
								<input type="radio" name="bookingTime" value="<?php echo e($time); ?>" id="<?php echo e($time); ?>" <?php if(!$availableTimes[$i]) echo 'disabled'; $i++;?>/>    
								<label for="<?php echo e($time); ?>"><?php echo e($time); ?></label>  	
							</li>
					    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
					</ul>
					<div class="booking-line"></div>
				</div>
			<?php  $j++; ?>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</div>
	</div>

	<script type="text/javascript">
	​$("#datepicker").datepicker({
    beforeShowDay: function(date) {
        return [date.getDay() == 5];
    }
})​​​​​;​
	</script>
<?php echo $__env->make('layouts.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

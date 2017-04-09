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

	<body>
		<div>
		<form action="<?php echo e(action('BookingController@update')); ?>" method="GET" class="ws-validate">
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
			<?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
				<li>
					<input type="radio" name="bookingTime" value="<?php echo e($time); ?>" id="<?php echo e($time); ?>" <?php if(!$availableTimes[$i]) echo 'disabled'; $i++;?>/>    
					<label for="<?php echo e($time); ?>"><?php echo e($time); ?></label>  	
				</li>
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</ul>
	</div>
<?php echo $__env->make('layouts.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!doctype html>
<html>
<head>
<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php echo $__env->make('layouts.navAdmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<table>
		<tr>
		<th>Customer</th>
			<th>Employee</th>
			<th>Start Time</th>
			<th>End Time</th>
		</tr>
<?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<tr>
			<td><?php echo e($booking->name); ?></td>
			<td><?php echo e($booking->employee_name); ?></td>
			<td><?php echo e($booking->start); ?></td>
			<td><?php echo e($booking->end); ?></td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	
</table>
<?php echo $__env->make('layouts.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!doctype html>
<html>
<head>
@include('layouts.head')
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
@include('layouts.navAdmin')
<table>
		<tr>
		<th>Customer</th>
			<th>Employee</th>
			<th>Start Time</th>
			<th>End Time</th>
		</tr>
@foreach ($bookings as $booking)
	<tr>
			<td>{{$booking->name}}</td>
			<td>{{$booking->employee_name}}</td>
			<td>{{$booking->start}}</td>
			<td>{{$booking->end}}</td>
	</tr>
@endforeach
	
</table>
@include('layouts.foot')

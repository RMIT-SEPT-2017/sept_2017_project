<!doctype html>
<html>
<head>
@include('layouts.head')

</head>
<body>
@include('layouts.nav')
<form action="{{ action('SuperUserController@updateControl') }}" method="POST">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<select name="id">
	@foreach ($users as $user)
	    <option value="{{$user->id}}">{{$user->name}}</option>
	@endforeach
	</select >
	<div class="sub">
        <input type="submit" value="Submit"></a>
    </div>
</form>
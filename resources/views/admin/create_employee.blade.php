<!--please create a nice looking html layout around this form-->


<form method="POST" action="{{ action('AdminController@updateEmployees') }}">
	<input type="text" name="name">
	<input type="text" name="email">
	<button type="submit">Submit</button>
</form>
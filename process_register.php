<?php
	/* Post */
	if(isset($_POST['FName']))
        $FName = $_POST['FName'];
	if(isset($_POST['LName']))
        $LName = $_POST['LName'];
	if(isset($_POST['UName']))
        $Email = $_POST['UName'];
	if(isset($_POST['Password']))
        $Password = $_POST['Password'];
	if(isset($_POST['CPassword']))
        $CPassword = $_POST['CPassword'];

	/* Data validation */
	/* current method of outputting information of incorrect data
	 * is a little rudimentary, will look into better methods.
	 */
	/* password check */
	if($Password != $CPassword) 
		die('Passwords do not match');
	/* email validation */
	if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
		die("Invalid email format");
	}
	/* email duplicate validation */
	$db = mysqli_connect("localhost", "root","", "bookingsystem")  or die(mysqli_error($db));
	$sql = "select * from login where email = '$Email'";
	$result = mysqli_query($db, $sql);
	if(mysqli_num_rows($result)>=1){
		die("Email is already in use.");
	}

	/* Database input */
	$q = "insert into login values('$FName', '$LName', '$Email', '$Password')";
	mysqli_query($db, $q) or die(mysqli_error($db));
	
	header("Location:index.php");
?>

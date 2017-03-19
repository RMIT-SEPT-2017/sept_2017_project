<?php
	if(isset($_POST['FName']))
        $FName = $_POST['FName'];
	if(isset($_POST['LName']))
        $LName = $_POST['LName'];
	if(isset($_POST['UName']))
        $Email = $_POST['UName'];
	if(isset($_POST['Password']))
        $Password = $_POST['Password'];
	
	$db = mysqli_connect("localhost", "root","", "bookingsystem")  or die(mysqli_error($db));
	$q = "insert into login values('$FName', '$LName', '$Email', '$Password')";
	mysqli_query($db, $q) or die(mysqli_error($db));
	
	header("Location:index.php");
?>

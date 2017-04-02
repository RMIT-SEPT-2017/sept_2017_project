<?php
	/* Post */
	if(isset($_POST['FName']))
		$FName = $_POST['FName'];
	if(isset($_POST['LName']))
		$LName = $_POST['LName'];
	if(isset($_POST['Email']))
		$Email = $_POST['Email'];
	if(isset($_POST['Phone']))
		$Phone = $_POST['Phone'];
	if(isset($_POST['TFN']))
		$TFN = $_POST['TFN'];

	/* Database input */
	$q = "insert into employee values('$FName', '$LName', '$Email', '$Phone', '$TFN')";
	mysqli_query($db, $q) or die(mysqli_error($db));
	
	header("Location:index.php");
	
?>

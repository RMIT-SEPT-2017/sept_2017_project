<?php 
function loginCheck($password, $email, $conn){
	$result = "";	
	$sql = "SELECT password FROM users WHERE email='".$email."'";
	$results = $conn->query($sql);
	while ($row = $results->fetch_assoc()) {
		$result = $row['password'];
	}
	if($password==$result){
		echo "yes all good";
		return true;
	}
	else {
		echo "no";
		return false;
	}
	
}




$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["Name"];
  $password = $_POST["Password"];
}
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "booking";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

loginCheck($password, $username, $conn); 

?>
<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$mysqli = new mysqli('localhost', 'root', '', 'etproject');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$sql="SELECT * FROM admindata WHERE email='".$email."' and password='".$password."'";
if ($res = mysqli_query($mysqli, $sql)) { 
	if (mysqli_num_rows($res) > 0) { 
		echo "login successful";
		 include 'uploadhtml.php';
		 $_SESSION['user']=$email;
	} 
	else { 
		echo "invalid login";
		include 'login.html'; 
		session_destroy();
	} 
} 
else { 
	echo "ERROR: Could not able to execute $sql. "
								.mysqli_error($link); 
} 
$mysqli->close();
?>

<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

$link = mysqli_connect("localhost", "root", "", "etproject"); 

if ($link == false) { 
	die("ERROR: Could not connect. "
				.mysqli_connect_error()); 
} 
$sql="SELECT * FROM userdata WHERE email='".$email."' and password='".$password."'";
if ($res = mysqli_query($link, $sql)) { 
	if (mysqli_num_rows($res) > 0) { 
		$_SESSION['user']=$email;
		echo "<table>"; 
		echo "<tr>"; 
		echo "<th>username</th>"; 
		echo "<th>email</th>"; 
		echo "<th>mobile number</th>"; 
		echo "<th>password</th>";
		echo "</tr>"; 
		while ($row = mysqli_fetch_array($res)) { 
			echo "<tr>"; 
			echo "<td>".$row['user_name']."</td>"; 
			echo "<td>".$row['email']."</td>"; 
			echo "<td>".$row['phone_number']."</td>";
			echo "<td>".$row['password']."</td>"; 
			echo "</tr>"; 
		} 
		echo "</table>"; 

		echo "<br><br>";

		echo "<form action='userlogout.php'>
	<table>
	<tr>
		<td colspan='2' align='center'>
			<input type='submit' value='logout'>
		</td>
	</tr>
</table>
</form>";

	} 
	else { 
		echo "<center>";
		echo "invalid login";
		include 'userlogin.html';
		echo "</center>";
		session_destroy(); 
	} 
} 
else { 
	echo "ERROR: Could not able to execute $sql. "
								.mysqli_error($link); 
} 
mysqli_close($link); 
echo "<br>";
?>
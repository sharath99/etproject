<?php
echo "<br>";
echo "welcome ".$_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
        <style>
        	input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
table {
  width: 90%;
}

th {
  height: 50px;
}
        	input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=file] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

            div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
        </style>
    </head>
<body>
	<center>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<table>
	<tr>
	<td>choose file to upload:</td>
	<td>
		<input type="file" name="file" size="50" accept=".csv,.xls">
	</td>	
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="upload">
		</td>
	</tr>
</table>
<br><br>
</form>
<form action="adminlogout.php">
	<table>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="logout">
		</td>
	</tr>
</table>
</form>
</center>
</body>
</html>
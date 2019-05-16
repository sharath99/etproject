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
input[type=password], select {
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
        <script>
    history.pushState("null","null",document.title);
    window.addEventListener('popstate',function(){
        history.pushState("null","null",document.title);
    })
</script>
    </head>
<body>
<center>
	<h1>User Login</h1>
<form action="userlogin.php" method="POST">
	<table>
		<tr>
			<td>
				email:
			</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td>
				password:
			</td>
			<td>
				<input type="password" name="password">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="login">
			</td>
		</tr>
	</table>
</form>
<form action="login.html" method="POST">
  <table>
    <tr>
      <td>
        <input type="submit" value="admin login">
      </td>
    </tr>
  </table>

</form>
</center>
</body>
</html>
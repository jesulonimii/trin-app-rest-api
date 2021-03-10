<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login to Trin App Manager</title>
</head>
<body>

	<form action="admin_login.php" method="post">
		
		<input type="text"	placeholder="username" name="username" maxlength="15">
		<br>
		<input type="password" placeholder="passowrd" name="password" minlength="6">
		<br>
		<input type="submit" value="login">
	</form>
	
</body>

<?php

$username = $password = "";


$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);

if ($username == "admin" && $password == "admin2021") {
	
	header("location: home.php");

} else{
	echo "wrong username and password combination";
}



?>


</html>

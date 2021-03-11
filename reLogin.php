
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login to Trin App Manager</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">

	<form action="login.php" method="post">

		

		<h2>Login to the App Admin Manager</h2>

		<div class="failed">
			You have to be logged in to continue
		</div><br>

		<input type="text"	placeholder="username" name="username" maxlength="15">
		<br>
		<input type="password" placeholder="passowrd" name="password" minlength="6">
		<br>
		<input type="submit" value="Login">

	</form>
	
	<?php include_once 'signature.php'; ?>

	</div>

</body>



</html>

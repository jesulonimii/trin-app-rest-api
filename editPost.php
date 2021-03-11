<?php require_once 'checkLogin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fetch Post</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">

		<h2>Edit Post</h2>

		<h5 style="text-align: center; color: gray;">Enter the id of the post to be edited</h5>
		
		<form action="doEdits.php" method="post">

		<input type="number" placeholder="Post ID" name="id" required><br>
		
		<input type="submit" value="Next">


	</form>

	<div class="back-links">
			<a href="home.php">Back to home</a>
	</div>

	<?php include_once 'signature.php'; ?>

	</div>

	
	
</body>
</html>
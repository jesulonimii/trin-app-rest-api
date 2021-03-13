<?php require_once 'checkLogin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">
		
		<h2>Trin App Manager</h2>

		<h5 style="text-align: center; color: gray;">What do you want to do?</h5>

		<a class="manage-links" href="addPost.php">Add Post</a><br>
		<a class="manage-links" href="editPost.php">Edit Post</a><br>
		<a class="manage-links" href="deletePost.php">Delete Post</a><br>
		<a class="manage-links" href="api" target="_blank">Track API (for developer use)</a><br>
		<a class="manage-links" style="background: #ff2828; color: white; border: 0;" href="logout.php">Log Out</a><br>


		<?php include_once 'signature.php'; ?>
	</div>
	


</body>
</html>

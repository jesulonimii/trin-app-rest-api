<?php require_once 'checkLogin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Post</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">

		<h2>Add Post</h2>
		
		<form action="add.php" method="post">

		<input type="text" placeholder="title" name="title" required><br>
		<input type="text" placeholder="description" name="description" required><br>
		<textarea name="content" rows="20" placeholder="content here" required></textarea><br>
		
		<select name="category" required>
			<option value="Teens Talk Thursday">Teens Talk Thursday</option>
			<option value="Coro Talk">Coro Talk</option>
			<option value="Bible study">Bible study</option>
			<option value="Others">Others</option>
		</select>
		<br>
		<input type="url" placeholder="Image link" name="img" required>
		<br>
		<input type="submit" value="Add">


	</form>

	<div class="back-links">
			<a href="home.php">Back to home</a>
	</div>


	<?php include_once 'signature.php'; ?>

	</div>

	
	
</body>
</html>
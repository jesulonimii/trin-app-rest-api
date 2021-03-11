<?php

include_once 'db.php';

$post_id = $_POST["id"];


$query = "SELECT * FROM `articles` WHERE articles.id = $post_id";





$result = mysqli_query($connection, $query) or die(mysqli_error($connection));


$fetchTitle = null;

while ($row = mysqli_fetch_assoc($result)) {
	$fetchTitle = $row["title"];
	$fetchDescription = $row["description"];
	$fetchContent = $row["content"];
	$fetchCategory = $row["category"];
	$fetchImg = $row["img"];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Post</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">

		<h2>Edit Post</h2>

		<h5 style="text-align: center; color: gray;">Make your required changes.</h5>
		
		<form action="edit.php" method="post">

		<input type="text" placeholder="Post ID" value="Post ID: <?php echo $post_id; ?>" required disabled style="cursor: not-allowed;"><br>

		<input type="number" placeholder="Post ID" value="<?php echo $post_id; ?>" name="id" required  style="cursor: not-allowed; display: none;" hidden>

		<input type="text" placeholder="title" value="<?php echo $fetchTitle; ?>" name="title" required><br>

		<input type="text" placeholder="description"  value="<?php echo $fetchDescription; ?>" name="description" required><br>

		<textarea name="content" rows="20" placeholder="content here" required><?php echo $fetchContent; ?></textarea><br>
		
		<select name="category" value="<?php echo $fetchCategory; ?>" required>
			<option value="Teens Talk Thursday">Teens Talk Thursday</option>
			<option value="Coro Talk">Coro Talk</option>
			<option value="Bible study">Bible study</option>
			<option value="Others">Others</option>
		</select>
		<br>
		<input type="url" value="<?php echo $fetchImg; ?>" placeholder="Image link" name="img" required>
		<br>
		<input type="submit" value="Commit Changes">


	</form>

	</div>

	
	
</body>
</html>
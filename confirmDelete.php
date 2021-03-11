<?php require_once 'checkLogin.php'; ?>
<?php
include_once 'db.php';

$post_id = "null";

$post_id = $_POST["id"];

$confirmDelete = "SELECT  `title` FROM `articles` WHERE articles.id = $post_id";





$result = mysqli_query($connection, $confirmDelete) or die(mysqli_error($connection));


$confirmTitle = null;

while ($row = mysqli_fetch_assoc($result)) {
	$confirmTitle = $row["title"];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirm delete</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">
		
		<div class="go-delete" <?php if ($confirmTitle == null) {echo "hidden";} ?> >
			<h2>Confirm Delete</h2>
			Are you sure you want to delete post with title:<br> 
			<h3><?php echo $confirmTitle ?><h3>
			<br>
			<a class="yes" href="delete.php?id=<?php echo $post_id ?>" >Yes, Delete</a>
			<a class="no"href="home.php">No, Return to homepage</a>

		</div>


		<div class="not-exist" <?php if (!$confirmTitle == null) {echo "hidden";} ?>>

			<h2>Error</h2>
			<div class="failed"  >
				There is no post with the provided ID
			</div>

			<div class="back-links">
				<a  href="deletePost.php">Back to delete</a> |
				<a href="home.php">Back to home</a>
			</div>
			

		</div>
		
		<?php include_once 'signature.php'; ?>

	</div>

	
	
</body>
</html>

<?php mysqli_close($connection); ?>
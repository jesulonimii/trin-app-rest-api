<?php require_once 'checkLogin.php'; ?>
<?php
include_once 'db.php';

$post_id = $_GET["id"];





$query = "DELETE FROM `articles` WHERE articles.id = $post_id";


$result = mysqli_query($connection, $query) or die(mysqli_error($connection));




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post Delete</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">
		
		<div class="feedback">

			<h2>Feedback</h2>

			<div class="success" <?php if(!$result){echo "hidden";} ?> >
				Post Deleted Successfully
			</div>

			<div class="failed" <?php if($result){echo "hidden";} ?> >
				Post Could not be deleted!
			</div>
			
		</div>

		<?php include_once 'signature.php'; ?>

	</div>
	
</body>
</html>

<?php mysqli_close($connection); ?>
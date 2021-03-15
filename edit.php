<?php require_once 'checkLogin.php'; ?>
<?php
include_once 'db.php';

$id = $title = $description = $content = $category = $img = $result = "";

$id = $_POST["id"];
$title = addslashes(htmlspecialchars($_POST["title"]));
$description = addslashes(htmlspecialchars($_POST["description"]));
$content = addslashes($_POST["content"]);
$category = htmlspecialchars($_POST["category"]);
$img = htmlspecialchars($_POST["img"]);


date_default_timezone_set("Africa/Lagos");
$getDate = date('M d, Y');
$date = "Edited:" .$getDate;



$query = "UPDATE articles SET title = '$title' , content = '$content', description = '$description', `date` = '$date', category = '$category',  img = '$img' WHERE id = '$id'";


$result = mysqli_query($connection, $query) or die(mysqli_error($connection));


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post Edit</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">
		
		<div class="feedback">

			<h2>Feedback</h2>

			<div class="success" <?php if(!$result){echo "hidden";} ?> >
				Post Edits Made
			</div>

			<div class="failed" <?php if($result){echo "hidden";} ?> >
				Post Could not be Updated!
			</div>
			
			<div class="back-links">
				<a  href="editPost.php">Back to Edit Post</a> |
				<a href="home.php">Back to home</a>
			</div>
		</div>

		<?php include_once 'signature.php'; ?>

	</div>
	
</body>
</html>

<?php mysqli_close($connection); ?>
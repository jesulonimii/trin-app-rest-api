<?php require_once 'checkLogin.php'; ?>
<?php
include_once 'db.php';

$title = $description = $content = $category = $img = $result = "";

$title = addslashes(htmlspecialchars($_POST["title"]));
$description = addslashes(htmlspecialchars($_POST["description"]));
$content = addslashes($_POST["content"]);
$category = htmlspecialchars($_POST["category"]);
$img = htmlspecialchars($_POST["img"]);


date_default_timezone_set("Africa/Lagos");
$date = date('M d, Y');



$query = "INSERT INTO articles (title, content, description, `date`, category,  img) VALUES ('$title', '$content', '$description', '$date', '$category', '$img')";

$empty = false;

if (!$title == "" && !$category == "") {
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
} else{
	$empty = true;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post Add</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">
		
		<div class="feedback">

			<h2>Feedback</h2>

			<div class="success" <?php if(!$result){echo "hidden";} ?> >
				Post Added Successfully
			</div>

			<div class="failed" <?php if($result){echo "hidden";} ?> >
				Post Could not be Added!
			</div><br>	

			<div class="failed" <?php if(!$empty){echo "hidden";} ?> >
				Looks like you got here by mistake..
			</div>
			
			<div class="back-links">
				<a  href="addPost.php">Back to Add Post</a> |
				<a href="home.php">Back to home</a>
			</div>
		</div>

		<?php include_once 'signature.php'; ?>

	</div>
	
</body>
</html>

<?php mysqli_close($connection); ?>
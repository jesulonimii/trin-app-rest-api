<?php

include_once '../db.php';


$query = "SELECT `id`, `title`, `content`, `description`, `date`, `category`, `img` FROM `articles";


$result = mysqli_query($connection, $query);



$row = mysqli_fetch_assoc($result);

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
	
	$data[] = $row;



}

$json = json_encode($data);

 echo ($json);

?>
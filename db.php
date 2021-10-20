<?php

//TODO: Move this somwhere else

//add databse auth details here
$db_host = "";
$db_dbname = "";
$db_username = "";
$db_password = "";



$connection = mysqli_connect($db_host, $db_username, $db_password, $db_dbname);

if (!$connection) {
	
echo "failed to connect to db";

} else{};


?>

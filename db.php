<?php

$db_host = "localhost";
$db_dbname = "epiz_27422941_trin_posts";
$db_username = "root";
$db_password = "";


$connection = mysqli_connect($db_host, $db_username, $db_password, $db_dbname);

if (!$connection) {
	
echo "failed to connect to db";

} else{};


?>
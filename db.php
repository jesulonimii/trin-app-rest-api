
<?php



$db_host = "sql4.freemysqlhosting.net";
$db_dbname = "sql4397947";
$db_username = "sql4397947";
$db_password = "g8xNQ4uIxN";




$connection = mysqli_connect($db_host, $db_username, $db_password, $db_dbname);

if (!$connection) {
	
echo "failed to connect to db";

} else{};


?>
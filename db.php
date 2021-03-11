<?php


$db_host = "localhost";
$db_dbname = "id16360826_jesulonimii";
$db_username = "id16360826_jesulonimii";
$db_password = "Will4christ-2003";

//$db_host = "sql4.freemysqlhosting.net";
//$db_dbname = "sql4397947";
//$db_username = "sql4397947";
//$db_password = "g8xNQ4uIxN";


//$db_host = "localhost";
//$db_dbname = "epiz_27422941_trin_posts";
//$db_username = "root";
//$db_password = "";


$connection = mysqli_connect($db_host, $db_username, $db_password, $db_dbname);

if (!$connection) {
	
echo "failed to connect to db";

} else{};


?>
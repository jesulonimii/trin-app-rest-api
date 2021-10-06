<?php

//TODO: Move this somwhere else

$db_host = "db4free.net";
$db_dbname = "jesulonimii_trin";
$db_username = "jesulonimii_trin";
$db_password = "jesus4eva";


$db_host = "sql4.freesqldatabase.com";
$db_dbname = "sql4442496";
$db_username = "sql4442496";
$db_password = "jesus4eva";



$connection = mysqli_connect($db_host, $db_username, $db_password, $db_dbname);

if (!$connection) {
	
echo "failed to connect to db";

} else{};


?>

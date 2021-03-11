<?php

session_start();

if ($_SESSION["verified"] == true) {
	//nothing
} 
else{
	header("location: reLogin.php");
}

?>
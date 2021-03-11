<?php
session_start();

if ($_SESSION["loggedIn"] == true) {
	//nothing
} 
else{
	header("location: reLogin.php");
}

?>
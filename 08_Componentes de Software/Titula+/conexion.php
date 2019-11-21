<?php 
$mysqli = new mysqli("localhost", "root","","bd_tsp");

if (mysqli_connect_errno()) {
	echo "error";
	exit();
}
?>
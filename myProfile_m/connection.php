<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authenticate";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	echo "Connection failure";
    die("Connection failed: " . mysqli_connect_error());
}
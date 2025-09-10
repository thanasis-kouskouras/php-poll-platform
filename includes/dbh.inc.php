<?php

// Database configuration - Update these values for your environment
$serverName = "localhost";  // Your database host
$dBUsername = "root";       // Your database username
$dBPassword = "";           // Your database password (empty for XAMPP default)
$dBName = "questionhouse";  // Your database name

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


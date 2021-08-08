<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sparks_bank";
$site=""; // While online the site please blank the site variable

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
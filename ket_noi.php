<?php
$servername = "localhost";
$database = "ban_hang";
$username = "nhom3tt25";
$password = "Password@123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
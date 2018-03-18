<?php
$server = "";
$username = "";
$password = "";
$db = "";
$conn = mysqli_connect($server, $username, $password, $db);

if ($conn->connect_error) {
    //If failed to connect
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php

$servername = "localhost";
$username = "AppScout";
$password = "AppScout1";
$dbname = "AppScout";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

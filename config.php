<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "belajar-php";

$konek = mysqli_connect($host, $user, $password, $database);

if (!$konek) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

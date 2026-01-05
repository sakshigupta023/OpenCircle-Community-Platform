<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "opencircle_db";

$conn = mysqli_connect($host,$user,$password,$database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connnect_error());  
}
?>
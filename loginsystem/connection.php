<?php
// $conn = mysqli_connect("localhost", "root", "loginsystem", "");

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "loginsystem";

if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("Database conncetion failed!");
}
?>
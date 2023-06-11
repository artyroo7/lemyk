<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "lemyk";
$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
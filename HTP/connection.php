<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "htp";
$conn = mysqli_connect($server,$username,$password,$db);

if (mysqli_connect_error()) {
    echo "<script> alert('can not connect to database at this instant')</script>";
    exist();
}
?>
<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "myportfolio";

$conn = mysqli_connect($hostName, $userName, $password, $dbName);

if(!$conn){
    die("Connection Failed! " . mysqli_connect_error());
}

?>
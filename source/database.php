<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "lis";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("FAILED TO CONNECT TO THE DATABASE!!!");
}

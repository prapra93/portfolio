<?php

$servername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dBName = "portfolio";

$conn = mysqli_connect($servername, $dbUsername, $dBPassword, $dBName, 3306);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
} else {
    echo "Connected";
}
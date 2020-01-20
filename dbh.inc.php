<?php

$servername = "localhost";
$dBUsername = "desertxl_jg";
$dBPassword = "Utep!7231";
$dBName = "desertxl_loginsystemm2k";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection has Failed :  " .mysqli_connect_error());
}
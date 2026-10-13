<?php

mysqli_report(MYSQLI_REPORT_OFF);

$conn = mysqli_connect('localhost', 'root', 'root', 'win');

if (!$conn) {
    die('Error: ' . mysqli_connect_error());
}




?>
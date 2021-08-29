<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "regvaksin";
$query_koneksi = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if (!$query_koneksi)
{
    die("GALAT");
}
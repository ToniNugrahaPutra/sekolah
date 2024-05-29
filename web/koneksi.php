<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "indonesia";

$koneksi = mysqli_connect($servername, $username, $password, $db);

if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
}


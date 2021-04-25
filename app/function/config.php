<?php
define("BASE_URL", "http://localhost/uts-pwl/");

$server = "localhost";
$username = "root";
$password = "";
$database = "uts-pwl";

$koneksi = mysqli_connect($server, $username, $password, $database) or die("koneksi ke database gagal");

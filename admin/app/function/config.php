<?php
	define("BASE_URL", "http://localhost/project/admin/");
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "project1";

	$koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi ke database gagal");

	
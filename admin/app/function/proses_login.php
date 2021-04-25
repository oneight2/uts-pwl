<?php
session_start();
include_once("../function/config.php");

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'goahead' ) {
    if ($password == 'admin') {
    $_SESSION['status'] = true;
    header("Location: " . BASE_URL . "profil");
        
    }

}else{
header("Location: " . BASE_URL . "login/error");
}
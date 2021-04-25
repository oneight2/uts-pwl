<?php
session_start();
include_once 'app/function/parseUrl.php';
include_once 'app/function/function.php';

$url = isset($_GET['url']) ? $_GET['url'] : false;
$url = parseUrl($url);

$page = file_exists("app/view/$url[0].php") ? $url[0] : "main";

include_once 'app/view/template/header.php';
include_once 'app/view/template/menu.php';
include_once "app/view/$page.php";
include_once 'app/view/template/sidebar.php';
include_once 'app/view/template/footer.php';

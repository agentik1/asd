<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
if(!isset($_SESSION['auhorized'])){
	header('Location: login.php');
}
require_once 'uzbek.php';
$user = new User();
$user->loadFromSession();
$user->show();

?>
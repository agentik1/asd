<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>Данные</h1>
<input type="text" name="name" placeholder="Имя"><br>
<input type="text" name="name" placeholder="Фамилия"><br>
</body>
</html>
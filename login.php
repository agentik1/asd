<?php
session_start();
if (!empty($_POST['name']) && !empty($_POST['pas'])){
	$name = $_POST['name'];
	$password = $_POST['pas'];
	if ($name === 'triplesghoul' && $password === '1') {
		$_SESSION['user_name'] = $name;
		header('Location: index.php');

	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация</title>
	<link rel="stylesheet"  href="styles.css">
</head>
<body>
	<div id ="content">
<form action="" method="post">
<h3>Авторизация</h3>
<input type="text" name="name" placeholder="Логин"><br>
<input type="password" name="pas" placeholder="Пароль"><br>
<input type="submit" name="">
</form>
</div>
	
</body>
</html>
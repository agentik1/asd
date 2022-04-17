<?php 
require_once 'uzbek.php';
if (!empty($_POST)){
$user = new User();
$user->loadFromForm($_POST);
$user->saveToSession();
$_SESSION['authorized'] = 1;
echo '<script>window.location="index.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div id='content'>
	<form action="" method="post">
	<h3>Registration</h3>
	<input type="text" name="name" placeholder="Имя"><br>
	<input type="text" name="login" placeholder="Логин"><br>
	<input type="text" name="pas" placeholder="Пароль"><br>
	<input type="submit" name="">
	</form>
	
</div>
</body>
</html>

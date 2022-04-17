<?php
session_start();
class User{
	private $name;
	private $login;
	private $pas;
	public function set($n, $l, $p){
		$this->name = $n;
		$this->login = $l;
		$this->pas = $p;
	}
	public function saveToSession() {
		$_SESSION['user_name'] = $this->name;
		$_SESSION['user_login'] = $this->login;
		$_SESSION['user_pas'] = $this->pas;

	}
	public function loadFromSession(){
		$this->set($_SESSION['user_name'], $_SESSION['user_login'], $_SESSION['user_pas']);
	}
	public function authorize($P){
		if ($P['login'] === $this->login && $P['pas'] === $this->pas){
			return true;
		}
		else  {
			return false;
		}
	}
	public function loadFromForm($P){
		if(!empty($P['name']) && !empty($P['login']) && !empty($P['pas'])){
			$this->set($P['name'], $P['login'], $P['pas']);
		}

	}
	public function show() {
		echo '<h3>Имя:'.$this->name.'<h3>';
		echo '<h3>Логин:'.$this->login.'<h3>';
		echo '<h3>Пароль:'.$this->pas.'<h3>';
		echo '<a href="logout.php">Выйти</a>';
	}
}
?>
<?
session_start();
include '../db/dbconnect.php';

if (empty($_POST['admin_key'])) {
  echo "Введите ваш ключ";
}

elseif (empty($_POST['password'])) {
  echo "Введите ваш пароль!";
}else{
	$admin_key = $_POST['admin_key'];
	$password = $_POST['password'];
	$query = mysqli_query($CONNECT, "SELECT admin_key, password FROM admin WHERE `admin_key` = '{$admin_key}' AND `password` = '{$password}'");
	$sql = mysqli_fetch_assoc($query);
	if ($sql['admin_key'] === $_POST['admin_key'] AND $sql['password'] === $_POST['password']) {
		echo "Вошёл";
		$_SESSION['admin'] = $sql['admin_key'];
	}else{
		echo "Данные указаны не верно!";
	}
}
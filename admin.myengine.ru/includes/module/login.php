<?
session_start();
include '../db/dbconnect.php';

if (empty($_POST['telephone'])) {
  echo "Введите ваш номер телефона";
}

elseif (empty($_POST['password'])) {
  echo "Введите ваш пароль!";
}else{
	$telephone = $_POST['telephone'];
	$password = $_POST['password'];
	$query = mysqli_query($CONNECT, "SELECT id, telephone, password FROM users WHERE `telephone` = '{$telephone}' AND `password` = '{$password}'");
	$sql = mysqli_fetch_assoc($query);
	$row = mysqli_fetch_array($query);
	if ($sql['telephone'] === $_POST['telephone'] AND $sql['password'] === $_POST['password']) {
		echo "Вошёл";
		$_SESSION['id'] = $row['id'];
	}else{
		echo "Данные указаны не верно!";
	}
}
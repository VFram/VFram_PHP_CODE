<?
/*
Имя файла: login.php
Описание: Авторизация пользователя
*/

//Запуск сессии.
session_start();

//Подключение к БД.
include '../db/dbconnect.php';

//Если не заполнено поле E-mail, то выводим ошибку.
if (empty($_POST['email'])) {
  echo "Введите ваш E-Mail";
}

//Если не заполнено поле Password, то выводим ошибку.
elseif (empty($_POST['password'])) {
  echo "Введите ваш пароль!";
}else{

	//Переменная email.
	$email = $_POST['email'];

	//Переменная password.
	$password = $_POST['password'];

	//Выборка данных по email и password
	$query = mysqli_query($CONNECT, "SELECT id, email, password FROM users WHERE `email` = '{$email}' AND `password` = '{$password}'");
	$sql = mysqli_fetch_assoc($query);

	//Проверка данных, если всё верно, то создаём сессию и перенапровляем на страницу пользователя.
	if ($sql['email'] === $_POST['email'] AND $sql['password'] === $_POST['password']) {
		$_SESSION['id'] = $sql['id'];
		$id = $_SESSION['id'];
		header("Location: /././id$id");
	}else{
		echo "Ведённые вами данные не верны!";
	}

	 } 
?>
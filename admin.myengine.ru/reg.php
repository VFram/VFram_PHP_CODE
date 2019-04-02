<?
//Запуск сессии.
session_start();

//Подключение базы данных.
include 'includes/db/dbconnect.php';

//Переменная с именем пользователя.
$usernamae = $_POST['username']; 

//Переменная с фамилией пользователя.
$lastname  = $_POST['lastname'];

//Переменная с паролем пользователя.
$password  = $_POST['password'];

//Переменная с почтой пользователя.
$email     = $_POST['email'];

//Переменная с телефоном пользователя.
$telephone = $_POST['telephone'];

//Переменная ip которая сохраняет ip пользователя.
$ip = $_SERVER['REMOTE_ADDR'];

//Запись данных в БД.
$q =  mysqli_query($CONNECT, "INSERT INTO users (username, lastname, password, email, telephone, ip, avatar) VALUES ('$username', '$lastname', '$password', '$email', '$telephone', '$id', '0')");

//Генерация временного ключа доступа
$time_key = substr(md5(microtime()),rand(0,0),35);

include 'overtime.php';
?>
<form method="POST">
	<input type="text" name="username" placeholder="Ваше имя">
	<input type="text" name="lastname" placeholder="Ваша фамилия">
	<input type="password" name="password" placeholder="Ваш пароль">
	<input type="email" name="email" placeholder="Ваш E-Mail">
	<input type="text" name="telephone" placeholder="Ваш телефон">
	<input type="submit" name="Войти">
</form>
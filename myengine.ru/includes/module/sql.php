<?
/*
Имя файла: sql.php
Описание: Вывод данных пользователя
*/

//Запуск сессии.
session_start();

//Подключение к БД.
include '/includes/db/dbconnect.php';

//Проверка на сушествование переменной GET['id'].
if(isset($_GET['id'])){
	$id = (int) $_GET['id'];
}

//Выборка данных по id из GET.
$sql = mysqli_query($CONNECT, "SELECT * FROM users WHERE id='$id'");
$row = mysqli_fetch_array($sql);


//id пользователя из сессии.
$ses = $_SESSION['id'];

//Выборка данных по id из сессии.
$sessql = mysqli_query($CONNECT, "SELECT * FROM users WHERE id='$ses'");
$sesrow = mysqli_fetch_array($sessql);


<?
/*
Имя файла: overtime.php
Описание: Создание сесси после регистрации
*/

//Подключение к БД.
include '../db/dbconnect.php';

//Запуск сесии.
session_start();

//Выборка данных по api_key.
$query = mysqli_query($CONNECT, "SELECT id FROM users WHERE api_key = '$api_key'");
$row = mysqli_fetch_array($query);

//Создание сессии с id пользователя.
$_SESSION['id'] = $row['id'];
$id = $_SESSION['id'];

header("Location: /id$id");

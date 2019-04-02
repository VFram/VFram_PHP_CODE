<?
/*
Имя файла: dbconnect.php
Описание: Подключение к Базе данных
*/

//Подключение к базе данных.
include_once 'db.php';
$CONNECT = mysqli_connect(HOST, USER, PASS, DB);
?>
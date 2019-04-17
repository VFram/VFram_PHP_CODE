<?
/*
Имя файла: dbconnect.php
Описание: Подключение к Базе данных
*/

//Подключение к базе данных.
include_once 'db.php';
$CONNECT = mysqli_connect(HOST, USER, PASS, DB);

$CONNECT_TUBE = mysqli_connect(HOST_TUBE, USER_TUBE, PASS_TUBE, DB_TUBE);
?>
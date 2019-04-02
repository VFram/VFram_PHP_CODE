<?
//Запуск сессии.
session_start();

//Подключение базы данных.
include 'includes/db/dbconnect.php';

//Выгрузка данных по ключу безопасности.
$query = mysqli_query($CONNECT, "SELECT id FROM users WHERE id='$time_key'");
$row = mysqli_fetch_array($query);
$_SESSION['id'] = $row['id'];
header("Location: /admin");

?>
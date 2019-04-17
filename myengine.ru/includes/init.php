<?
//Запуск сессии.
session_start();

//Выборка данных.
include '/includes/module/sql.php';

$session = $_SESSION['id'];
$username = $sesrow['username'];
$lastname = $sesrow['lastname'];
$avatar = $sesrow['avatar'];
$username_id = $row['username'];
$lastname_id = $row['lastname'];
$avatar_id = $row['avatar'];
?>
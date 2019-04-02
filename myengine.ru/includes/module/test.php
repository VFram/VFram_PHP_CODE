<?
/*
Имя файла: test.php
Описание: Проверка авторизации пользователя
*/

//Запуск сессии.
session_start();

//Проверка на сушествование сессии с id пользователя, иначе невпускаем.
if(isset($_SESSION['id'])) {
$id = $_SESSION['id']; 
header("Location: /id$id");
exit;
}else{ 

}
?>
<?
/*
Имя файла: feed.php
Описание: Страница новостей пользователя
*/

	//Запуск сессии.
	session_start();

	//Подключение вывода данных.
	include 'includes/module/sql.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Новости</title>
	<?
		//Подключение файлов.
		include 'connect.php';
	?>
</head>
<body>
<?
if(isset($_SESSION['id'])) {
	//Подключение файлов для авторизированного пользователя
	include 'includes/templates/def/top.php';
	include 'includes/templates/def/leftmenu.php';
}else{
	//Подключение файлов для не авторизированного пользователя
	include 'includes/templates/def/topno.php';
	include 'includes/templates/def/leftmenuno.php';
}
?>
</body>
</html>
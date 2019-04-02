<?
/*
Имя файла: games.php
Описание: Страница игор пользователя
*/
	session_start();
	include 'includes/module/sql.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Игры</title>
	<?
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
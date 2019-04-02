<?
/*
Имя файла: id.php
Описание: Страница пользователя
*/
	//Запуск сессии.
	session_start();

	//Подключение вывода данных.
	include 'includes/module/sql.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$sesrow['username'] ?> <?=$sesrow['lastname'] ?></title>
	<?
		//Подключение файлов.
		include 'connect.php';
	?>
</head>
<body>
<?
if(isset($_SESSION['id'])) {
	//Подключение файлов для авторизированного пользователя.
	include 'includes/templates/def/top.php';
	include 'includes/templates/def/leftmenu.php';
	include 'includes/templates/def/pages/user.php';
}else{
	//Подключение файлов для не авторизированного пользователя.
	include 'includes/templates/def/topno.php';
	include 'includes/templates/def/leftmenuno.php';
	include 'includes/templates/def/pages/user.php';
}
?>
</body>
</html>
<?
/*
Имя файла: video.php
Описание: Страница видеозаписей пользователя
*/
	//Запуск сессии.
	session_start();

	//Переменная с id пользователя.
	$id = $SESSION['id'];

	//Пустой запрос GET.
	if ($_GET['id'] == "") {

		//Перенаправление на страницу с id.
		header("Location: video$id");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Видеозаписи</title>
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
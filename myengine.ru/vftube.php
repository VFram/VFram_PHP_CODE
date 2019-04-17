<?
/*
Имя файла: vftube.php
Описание: Страница аудиоплеера
*/
	//Запуск сессии.
	session_start();

	//Подключение вывода данных.
	include 'includes/module/sql.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>VFTube</title>
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
	?>
		<div class="block_vftube_search">
			<form method="POST" action="includes/module/vftube_se.php">
				<input type="text" name="name" placeholder="Введите запрос">
				<button name="enter"><i class="fas fa-search"></i></button>
				<span><?$id?></span>
			</form>
		</div>
	<?
}else{
	//Подключение файлов для не авторизированного пользователя
	include 'includes/templates/def/topno.php';
	include 'includes/templates/def/leftmenuno.php';
}
?>
</body>
</html>
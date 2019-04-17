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
	<title><?=$row['username'] ?> <?=$row['lastname'] ?></title>
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
	?>
	<main id="swup" class="transition-fade">
		<div class="block_user">

		</div>
	</main>
	<?
}else{
	//Подключение файлов для не авторизированного пользователя.
	include 'includes/templates/def/topno.php';
	include 'includes/templates/def/leftmenuno.php';
	?>
	<main id="swup" class="transition-fade">
		<div class="block_user">

		</div>
	</main>
	<?
}
?>
<script src="js/swup.min.js"></script>
<script type="text/javascript">
		const swup = new Swup();
</script>
</body>
</html>


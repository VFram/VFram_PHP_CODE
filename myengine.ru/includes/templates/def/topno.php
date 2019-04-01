<?
//Запуск сессии.
session_start();

//Выборка данных.
include '/includes/module/sql.php';

	//html.
	echo '
<meta charset="utf-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/main.css">
<div class="top">
	<div class="img">
		<img src="/images/logoreg.png">
	</div>
	<div class="search">
		<input type="text" name="search" placeholder="Поиск">
		<i class="fas fa-search"></i>
	</div>
	<div class="link">
		<a href="user.php?id='.$_SESSION['id'].'">Люди</a>
		<a href="games">Игры</a>
		<a href="audio.php?id='.$_SESSION['id'].'">Музыка</a>
		<a href="support">Помощь</a>
	</div>
	<div class="smallinfo">
			<h2>Авторизируйтесь</h2>
	</div>
</div>

';
?>
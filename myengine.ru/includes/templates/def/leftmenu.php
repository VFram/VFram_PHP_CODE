<?
//Запуск сессии.
session_start();

//Подключение переменных.
include '/includes/init.php';
include '/connect.php';
?>

<div class="leftmenu">
	<div class="block_left_menu">
		<div class="home">
			<i class="fas fa-home"></i>
			<a href="id<?=$session ?>">Моя страница</a>
		</div>
		<div class="frends">
			<i class="fas fa-user"></i>
			<a href="frends">Друзья</a>
		</div>
		<div class="photo">
			<i class="fas fa-images"></i>
			<a href="photo<?=$session ?>">Фотографии</a>
		</div>
		<div class="video">
			<i class="fas fa-video"></i>
			<a href="video<?=$session ?>">Видеозаписи</a>
		</div>
		<div class="audio">
			<i class="fas fa-music"></i>
			<a href="audio<?=$session ?>">Аудиозаписи</a>
		</div>
		<div class="messages">
			<i class="fas fa-envelope"></i>
			<a href="im">Сообщения</a>
		</div>
		<div class="groups">
			<i class="fas fa-users"></i>
			<a href="groups">Группы</a>
		</div>
		<div class="news">
			<i class="fas fa-newspaper"></i>
			<a href="feed">Новости</a>
		</div>
		<div class="settings">
			<i class="fas fa-cog"></i>
			<a href="settings">Настройки</a>
		</div>
		<div class="exit">
			<i class="fas fa-sign-out-alt"></i>
			<a href="/exit">Выйти</a>
		</div>
		<div class="games">
			<i class="fas fa-gamepad"></i>
			<a href="games">Приложения</a>
		</div>
		<div class="vftube">
			<i class="fab fa-youtube"></i>
			<a href="vftube">VFTube</a>
		</div>
	</div>
</div>

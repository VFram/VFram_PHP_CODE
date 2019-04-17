<?
//Запуск сессии.
session_start();

//Подключение переменных.
include '/includes/init.php';
?>
<div class="block_top">
	<div class="block_logo">
		<a href="feed"><img src="/images/logoreg.png"></a>
	</div>	
	<div class="search">
		<input type="text" name="search" placeholder="Поиск">
		<i class="fas fa-search"></i>
	</div>
	<div class="link">
		<a href="frends">Люди</a>
		<a href="games">Игры</a>
		<a href="audio">Музыка</a>
		<a href="support">Помощь</a>
		<a href="edit">Редактирование</a>
	</div>
	<div class="block_info">
		<div class="name_top">
			<a href="">Авторизируйтесь</a>
		</div>
	</div>
</div>
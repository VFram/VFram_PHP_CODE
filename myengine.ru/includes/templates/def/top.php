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
		<a href="frends<?=$session ?>">Люди</a>
		<a href="games">Игры</a>
		<a href="audio<?=$session ?>">Музыка</a>
		<a href="support">Помощь</a>
		<a href="edit">Редактирование</a>
	</div>
	<div class="block_info">
		<div class="name_top">
			<a href=""><?=$username?>&nbsp;<?=$lastname ?></a>
		</div>
		<div class="block_photo">
			<img src="<?=$avatar?>">
		</div>
	</div>
</div>
<?
//Запуск сессии.
session_start();

//Выборка данных.
include '/includes/module/sql.php';
	//html.
	echo '
<div class="top">
	<div class="img">
		<img src="/images/logoreg.png">
	</div>
	<div class="search">
		<input type="text" name="search" placeholder="Поиск">
		<i class="fas fa-search"></i>
	</div>
	<div class="link">
		<a href="frends'.$_SESSION['id'].'">Люди</a>
		<a href="games">Игры</a>
		<a href="audio'.$_SESSION['id'].'">Музыка</a>
		<a href="support">Помощь</a>
		<a href="edit">Редактирование</a>
	</div>
	<div class="smallinfo">
		<div class="phototop">
			<a href=""><img src="'.$sesrow['avatar'].'"></a>
			<div class="nametop">
				<a href="">'.$sesrow['username'].'&nbsp;'.$sesrow['lastname'].'</a>
			</div>
		</div>
	</div>
</div>

';
?>


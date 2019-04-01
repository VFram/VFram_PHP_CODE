<?
//Запуск сессии.
session_start();

//Выборка данных.
include '/includes/module/sql.php';

//Сверка $_GET['id'] AND $_SESSION['id'].
if ($_GET['id'] === $_SESSION['id']) {
	echo '

		<div class="page_block"></div>
		<div class="page_photo">
			<img src="'.$sesrow['avatar'].'">
			<p>'.$sesrow['username'].'&nbsp;'.$sesrow['lastname'].'</p>
		</div>
		<div class="info_block">
		</div>



	';
}else{
	echo '

		<div class="page_block" style="Background: url(http://img.myengine.ru/iA6DL3PHZ.jpg) no-repeat center; background-size: cover;"></div>
		<div class="page_photo">
			<img src="'.$row['avatar'].'">
			<p>'.$row['username'].'&nbsp;'.$row['lastname'].'</p>
		</div>


	';	
}

?>

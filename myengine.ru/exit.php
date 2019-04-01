<?
//Запуск сессии.
session_start();

//При сушествующей сессии идёт удаление, иначе перенапровляем на главную странцу.
if (isset($_SESSION['id'])) {
	session_destroy();
	header("Location: index.php");
}else{
	header("Location: index.php");
}
?>
<?
if (isset($_SESSION['admin'])) {
}else{
	header("Location: /includes/pages/login.php");
}
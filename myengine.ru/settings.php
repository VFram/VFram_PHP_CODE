<?
	session_start();
	include 'includes/module/sql.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Настройки</title>
	<?
		include 'connect.php';
	?>
</head>
<body>
<?
if(isset($_SESSION['id'])) {
	include 'includes/templates/def/top.php';
	include 'includes/templates/def/leftmenu.php';
}else{
	include 'includes/templates/def/topno.php';
	include 'includes/templates/def/leftmenuno.php';
}
?>
</body>
</html>
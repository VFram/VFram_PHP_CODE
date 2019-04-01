<?
	session_start();
	$id = $SESSION['id'];
	if ($_GET['id'] == "") {
		header("Location: photo$id");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Фотографии</title>
	<?
		include 'connect.php';
	?>
</head>
<body>
<?

if (isset($_SESSION['id'])) {
	include 'includes/templates/def/top.php';
	include 'includes/templates/def/leftmenu.php';
}else{
	include 'includes/templates/def/topno.php';
	include 'includes/templates/def/leftmenuno.php';
}

?>
</body>
</html>
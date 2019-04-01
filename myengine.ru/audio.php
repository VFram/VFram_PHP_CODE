<?
	session_start();
	$id = $SESSION['id'];
	if ($_GET['id'] == "") {
		header("Location: audio$id");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Аудиозаписи</title>
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
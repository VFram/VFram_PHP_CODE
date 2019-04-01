<?
session_start();
include 'includes/db/dbconnect.php';
$admin_key = $_POST['admin_key'];
$password = $_POST['password'];
$q =  mysqli_query($CONNECT, "INSERT INTO admin (admin_key, password) VALUES ('{$_POST['admin_key']}', '{$_POST['password']}')");
?>
<form method="POST">
	<input type="text" name="admin_key" placeholder="key">
	<input type="password" name="password" placeholder="password">
	<input type="submit" name="Войти">
</form>
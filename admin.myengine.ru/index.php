<?
session_start();
include 'includes/module/test.php';

?>
<link rel="stylesheet" type="text/css" href="css/main.css">
<center>
	<div class="block">
		<form action="includes/module/login.php" method="POST">
			<p>Вход</p>
			<input type="text" name="telephone" placeholder="Введите ваш номер телефона">
			<input type="password" name="password" placeholder="Введите ваш пароль">
			<input type="submit" value="Войти">
		</form>
	</div>
</center>
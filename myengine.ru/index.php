<?
include 'includes/db/dbconnect.php';
include 'includes/module/test.php';
?>
<link rel="stylesheet" type="text/css" href="css/common.css">
<div class="topmenu">
	<div class="loginmenu">
		<a class="vaylog" href="login"></a>
			<form method="POST" action="includes/module/login.php">
				<input type="text" name="email" placeholder="E-mail">
				<input type="password" name="password" placeholder=Пароль>
				<button>Войти</button>
			</form>
	</div>
</div>
<center>
	<div class="register">
		<h2>Регистрация</h2>
			<form action="includes/module/register.php" method="POST">
				<input type="text" name="username" placeholder="Ваше имя">
				<input type="text" name="lastname" placeholder="Ваша фамилия">
				<input type="text" name="telephone" placeholder="Ваш номер телефона">
				<input type="text" name="email" placeholder="Ваш E-mail">
				<input type="password" name="password" placeholder="Ваш пароль">
				<button>Зарегистрироваться</button>
			</form>
	</div>
</center>
<?
/*
Имя файла: index.php
Описание: Главная странца
*/

//Подключение файла тест.
include 'includes/module/test.php';
include 'connect.php';
?>
<link rel="stylesheet" type="text/css" href="css_all/main.css">
<meta charset="utf-8">
<div class="block_left_menu">
	<div class="block_login" id="log">
		<div class="block_logo_index">
			<a href=""><img src="images/logoreg.png"></a>
		</div>
		<div class="block_form">
			<span>Вход</span>
			<form method="POST" action="includes/module/login.php" name="contact_form">
				<div id="messageShow"></div>
				<input type="text" name="email" id="username" placeholder="Введите ваш номер телефона или почту">
				<input type="password" name="password" id="password" placeholder="Введите ваш пароль">
				<button id="login">Войти</button>
			</form>
			<form method="POST" action="">
				<div class="reset">
					<button>Напомнить пароль</button>
				</div>
			</form>
				<div class="register_link">
					<a href="" id="reg">Регистрация</a>
				</div>
		</div>
	</div>
</div>

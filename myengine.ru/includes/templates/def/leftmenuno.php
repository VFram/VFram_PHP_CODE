<?
//Запуск сессии.
session_start();

//Подключение переменных.
include '/includes/init.php';
?>
<div class="leftmenu">
	<form action="/includes/module/login.php" method="POST">
		<div class="block_login">
			<input type="text" name="email" placeholder="E-Mail">
			<input type="password" name="password" placeholder="Пароль">
			<button>Войти</button>
		</div>
	</form>
</div>
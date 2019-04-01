<?
session_start();
include '/includes/module/sql.php';
	echo '
<div class="leftmenu">
	<form action="/includes/module/login.php" method="POST">
		<input type="text" name="email" placeholder="E-Mail">
		<input type="password" name="password" placeholder="Пароль">
		<button>Войти</button>
	</form>
</div>
';
?>
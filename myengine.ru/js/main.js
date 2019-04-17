function edit() {
	location.replace("http://myengine.ru/edit"); 
}

$(document).ready (function () {
	$("#login").click (function () {
		var username = $("#username").val ();
		var password = $("#password").val ();
		var fail = "";
		if (username.length < 1) fail = "<span>Введите вашу почту.</span>";
		else if (password.length < 1) fail = "Введите ваш пароль.";
		if (fail != "") {
			$('#messageShow').html (fail + "");
			$('#messageShow').show ();
			return false
		}
		$.ajax ({
			url: 'includes/module/login.php',
			type : 'POST',
			cache: false,
			data: {
				'username': username,
				'password': password
			}
		});
	});
});
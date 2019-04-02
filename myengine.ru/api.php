<?
/*
Имя файла: api.php
Описание: api интерфейс пользователя
*/

//Выборка данных.
include 'includes/db/dbconnect.php';

//Установка кодировки.
header('Content-TYPE: application/json');

//Проверка на сушествование GET['api_key'].
if (empty($_GET['api_key'])) {
	echo "Error [No user api_key specified]";
}

//Выборка данных из БД по api_key.
$query = mysqli_query($CONNECT, "SELECT * FROM users WHERE `api_key` = '".$_GET['api_key']."'");
$result = mysqli_fetch_assoc($query);

//Вывод всех данных.
if ($result) {
	$result = [
		'id'        => $result['id'],
		'ip'        => $result['ip'],
		'api_key'   => $result['api_key'],
		'email'     => $result['email'],
		'telephone' => $result['telephone']
	];
	$all = json_encode($result);
}

//Вывод id and ip.
if ($result) {
	$result = [
		'id'        => $result['id'],
		'ip'        => $result['ip']
	];
	$ip = json_encode($result);
}

//Методы и выводы.
//Вывод всех значений пользователя.

//Проверка на сушествование GET['method'].
if ($_GET['method'] == "") {
	echo " [No method specified]";
}

//Вывод ошибки при отсутствие GET['version'].
if ($_GET['version'] == "") {
	echo " [No version specified]";
}

//Проверка на сушествование GET['version'].
if ($_GET['version'] == "1.0") {
		//Вывод всех данных пользователя
		if ($_GET['method'] == "user.all") {
			echo $all;
		}

		//Вывод id, ip пользователя
		if ($_GET['method'] == "user.ip") {
			echo $ip;
		}
}

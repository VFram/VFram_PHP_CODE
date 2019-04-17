<?
/*
Имя файла: api.php
Описание: api интерфейс пользователя
*/

//Выборка данных.
include 'includes/db/dbconnect.php';

//Выборка данных из БД по api_key.
$query = mysqli_query($CONNECT, "SELECT * FROM users WHERE `api_key` = '".$_GET['api_key']."'");
$result = mysqli_fetch_assoc($query);

//Установка кодировки.
header('Content-TYPE: application/json');

//Подсчёт символов.
$api = $_GET['api_key'];
$api_l = strlen($api);

//Проверка на сушествование GET['api_key'].
if (empty($_GET['api_key'])) {
	echo "Error [No user api_key specified]";
}else{
	if ($_GET['method'] === "") {
		echo " [No method specified]";
	}else{
		if ($_GET['version'] === "") {
			echo " [No version specified]";
		}else{
			if ($_GET['version'] === "1.0" && $api_l > 30 && $api_l < 40) {
				if ($_GET['method'] === "user.all") {
					//Вывод всех данных.
					$query = mysqli_query($CONNECT, "SELECT * FROM users WHERE `api_key` = '".$_GET['api_key']."'");
					$result = mysqli_fetch_array($query);
					if ($result) {
						$result = [
							'id'        => $result['id'],
							'ip'        => $result['ip'],
							'api_key'   => $result['api_key'],
							'email'     => $result['email'],
							'telephone' => $result['telephone']
						];
						$all = json_encode($result);
						echo $all;
					}
					if (empty($result)) {
						echo "[Not found api_key]";
					}

				}
				//Метод user.ip.
				if($_GET['method'] === "user.ip") {
					//Вывод всех данных.
					$query = mysqli_query($CONNECT, "SELECT * FROM users WHERE `api_key` = '".$_GET['api_key']."'");
					$result = mysqli_fetch_array($query);
					if ($result) {
						$result = [
							'id'        => $result['id'],
							'ip'        => $result['ip']
						];
						$all = json_encode($result);
						echo $ip;
					}
				}
				//Метод user.email.
				if($_GET['method'] === "user.email") {
					//Вывод всех данных.
					$query = mysqli_query($CONNECT, "SELECT * FROM users WHERE `api_key` = '".$_GET['api_key']."'");
					$result = mysqli_fetch_array($query);
					if ($result) {
						$result = [
							'id'        => $result['id'],
							'email'     => $result['email']
						];
						$email = json_encode($result);
						echo $email;
					}
				}
				//Метод user.telephone.
				if ($_GET['method'] === "user.telephone") {
					//Вывод всех данных.
					$query = mysqli_query($CONNECT, "SELECT * FROM users WHERE `api_key` = '".$_GET['api_key']."'");
					$result = mysqli_fetch_array($query);
					if ($result) {
						$result = [
							'id'        => $result['id'],
							'telephone'     => $result['telephone']
						];
						$telephone = json_encode($result);
						echo $telephone;
					}
				}
			}else{
				echo " [Invalid api_key length]";
			}
		}
	}
}

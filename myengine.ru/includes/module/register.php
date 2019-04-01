<?
//одключение к БД.
include '../db/dbconnect.php';

//Запуск сессии.
session_start();

//Если не заполнено поле username, то выводим ошибку.
if (empty($_POST['username'])) {
  echo "Введите ваше имя";
}

//Если не заполнено поле E-mail, то выводим ошибку.
elseif ((!preg_match("/[0-9a-z]+@[a-z]/", $_POST['email']))) {
  echo "E-Mail имеет не допустимы формат!";
}

//Если не заполнено поле password, то выводим ошибку.
elseif (empty($_POST['password'])) {
  echo "Введите ваш пароль!";
}else{

  //Переменная username.
  $username = $_POST['username'];

  //Переменная lastname.
  $lastname = $_POST['lastname'];

  //Переменная telephone.
  $telephone = $_POST['telephone'];

  //Переменная email.
  $email = $_POST['email'];

  //Переменная password и шифровка в MD5.
  $password = md5($_POST['password']);

  //Переменная ip которая сохраняет ip пользователя.
  $ip = $_SERVER['REMOTE_ADDR'];

  //Переменная api_key которая генирирует API ключ из 35 символов.
  $api_key = substr(md5(microtime()),rand(0,0),35);

  //Сверка полученных данных и введёных данных, если данные сходятся, то выводим ошибку.
  $query = mysqli_query($CONNECT, "SELECT id FROM users WHERE email='$email'");

  //Сверка полученных данных и введёных данных, если данные сходятся, то выводим ошибку.
  $qutel = mysqli_query($CONNECT, "SELECT id FROM users WHERE telephone='$telephone'");

  if (mysqli_num_rows($qutel)>0) {
    echo "Пользователь с таким номером уже зарегистрирован";
  }else{

  //Ошибка.
  if (mysqli_num_rows($query)>0) {
    echo "Такой E-Mail уже зарегистрирован!";
  }else{

  //Сохранение в БД username, lastname, telephone, email, password, ip, api_key, создание SESSION и подключение файла с авто.авторизацией.
  $q =  mysqli_query($CONNECT, "INSERT INTO users (username, lastname, telephone, email, password, ip, api_key, avatar) VALUES ('$username', '$lastname', '$telephone', '$email', '$password', '$ip', '$api_key', 'http://img.myengine.ru/noava.jpg')");
  include 'overtime.php';
}
}
}
?>

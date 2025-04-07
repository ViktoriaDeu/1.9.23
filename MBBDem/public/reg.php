<?php 
$login = $_POST["login"];
$pass = $_POST["pass"];
echo $login;
echo $pass;
$conn=new PDO("mysql:host=localhost;dbname=mmbdb","root","");
$sql = "INSERT INTO users (login, pass) VALUES ('$login','$pass')";
if ($result = $conn ->exec($sql)){
    echo "Регистрация успешна" ;
} else {
    echo "Ошибка";
}
?>
<?php 

$conn = new mysqli("127.0.0.1","root","and246","dbphp7");

if($conn->connect_error){

	echo "Error: ".$conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE (?,?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

 ?>
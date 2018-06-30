<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "anderon_c";
$password="1234556";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

//var_dump($stmt);

$stmt->execute();

echo "Inserido OK!";

 ?>
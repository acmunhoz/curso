<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","and246");

$stmt = $conn->prepare("UPDATE tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario=:ID");

$login = "anderon_c";
$password="1234556";
$id = "2";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

//var_dump($stmt);

$stmt->execute();

echo "Dados alterados!";

 ?>
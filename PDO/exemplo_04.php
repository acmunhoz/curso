<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","and246");

$stmt = $conn->prepare("DELETE FROM tb_usuarios where idusuario=:ID");

$id = "1";

$stmt->bindParam(":ID",$id);

//var_dump($stmt);

$stmt->execute();

echo "Delete OK!";

 ?>
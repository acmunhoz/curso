<?php 

require_once("config.php");

//Carrega 1 usuário
//$root = new Usuario();
//$root->loadById(8);
//echo $root;


//Carrega uma list de usuários

//$lista = new Usuario();

//$lista->getList();

//echo json_encode($lista);


//Carrega uma lista com usuarios buscando pelo login

$search = Usuario::search("ch");

echo json_encode($search);

 ?>
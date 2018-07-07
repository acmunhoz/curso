<?php 

require_once("config.php");

//Carrega 1 usuário
//$root = new Usuario();
//$root->loadById(8);
//echo $root;


/*
Carrega uma list de usuários

$lista = Usuario::getList();

echo json_encode($lista);
*/

/*
Carrega uma lista com usuarios buscando pelo login
$search = Usuario::search("t");
echo json_encode($search);
*/

//Carregar um usuário usando login e senha
/*
$usuario = new Usuario();

$usuario->login("cheta","and246");

echo $usuario;
*/

/*
$aluno = new Usuario("aluno2","123mudar");

$aluno->insert();

echo $aluno;
*/

/*
$usuario = new Usuario();

$usuario->loadById(24);

$usuario->update("Anderon","123defr");

echo $usuario; 

*/

$usuario = new Usuario();

$usuario->loadById(24);

$usuario->delete();

echo $usuario;

 ?>
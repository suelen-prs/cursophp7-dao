<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);


//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("su");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("jardim", "amarelo");
//echo $usuario;

//Criando um novo usuário
/*$aluno = new Usuario("aluno", "@aluno");

$aluno->insert();

echo $aluno;
*/
//Modificando usuário
/*
$usuario = new Usuario();
$usuario->loadById(1);
$usuario->update("professor", "!@kkkk");

echo $usuario;*/

//Deletando usuário
$usuario = new Usuario();
$usuario->loadById(1);
$usuario->delete();

echo $usuario;


?>
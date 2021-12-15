<?php

require_once("config.php");

//carrega um usuario (ok)
// $root = new Usuario();

// $root->loadbyId(38);     

// echo $root;
//=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

//(ok)
// carrega uma lista de usuarios
// $lista  = Usuario::getlist();

// echo json_encode($lista)

//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-=-=-=-=-=-=-=-=-=-=-=-

// (ok)
// $search = Usuario::search("un");

// echo json_encode($search);

//=-=-=-=-=-=-=-===-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

// $usuario = new Usuario("root","12345");
// $usuario->login();

// echo $usuario ;

//=-=-=-==-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

//ok
// $aluno = new Usuario("Rodrigo","123brs");

// $aluno->insert();

// json_encode($aluno);
//=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=

//criando um novo usuario;
// $aluno = new Usuario("aluno","@aluno");

// $aluno->insert();

// echo $aluno;
//=-=-==-=-=-=-=-=-=-=-=-=-=-=-==-===-====-
//********ALTERAR UM USUARIO*****************
//****************OK*************************
// $usuario = new Usuario();
// $usuario->loadById(18);
 

// $usuario->update("Carlos", "242424");

// echo $usuario

//=-=-==-=-=-=-=-=-=-=-=-=-=-=-==-===-====-
//*******DELETANDO UM USUARIO***************
$usuario = new Usuario();
$usuario->loadById(15);
$usuario->delete();

echo $usuario



?>
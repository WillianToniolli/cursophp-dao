<?php

require_once("config.php");

//carrega um usuario
//$root = new Usuario();

//$root->loadbyId(3);

//echo $root;
//=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

//carrega uma lista de usuarios
//$lista  = Usuario::getlist();

//echo json_encode($lista)

//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-=-=-=-=-=-=-=-=-=-=-=-
//$search = Usuario::search("jo");

//echo json_encode($search);

//=-=-=-=-=-=-=-===-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

$usuario = new Usuario();
$usuario->login ("root","12345");

echo $usuario;

?>
<?php

include_once 'C:\xampp\htdocs\Login\Modelo\usuario.php';
include_once 'C:\xampp\htdocs\Login\Modelo\autenticacionMock.php';
    
$username = $_POST["username"];
$pwd = $_POST["pwd"];

$autenticacionMock = new autenticacionMock;
$user = $autenticacionMock->autenticarUsuario($username, $pwd);

if ($user==true){
    // datosUsuario.php;
}else{
    +
    // errorAutenticacion.php;
}
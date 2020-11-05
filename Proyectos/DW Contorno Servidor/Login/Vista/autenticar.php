<?php

include_once 'C:\xampp\htdocs\Login\Modelo\usuario.php';
include_once 'C:\xampp\htdocs\Login\Modelo\autenticacionMock.php';
    
$username = $_POST["username"];
$pwd = $_POST["pwd"];

$autenticacionMock = new autenticacionMock;
$user = $autenticacionMock->autenticarUsuario($username, $pwd);

if ($user==false){

    $intentos=$_COOKIE['intentos'];
    setcookie('intentos',$intentos+1,time()+15);
    
    header("Location: errorAutenticacion.php");
}else{
    header("Location: datosUsuario.php");
}
?>
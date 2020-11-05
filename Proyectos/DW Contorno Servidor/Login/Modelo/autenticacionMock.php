<?php

include_once 'C:\xampp\htdocs\Login\Modelo\usuario.php';

class autenticacionMock{
function autenticarUsuario($username, $pwd) {
    $listaUsuarios=Array(
        1 => new usuario("diego", "1234", "Diego", "Sin Apellidos"),
        2 => new usuario("Rodrigo", "qwerty", "Rodrigo", "Rodriguez"),
    );
    //para probar si llega hasta aqui 
//     var_dump("Llega a autentMock");
//     var_dump($username);
//     var_dump($pwd);
//     var_dump("*****");
//     exit();
    
    foreach ($listaUsuarios as $user){
        if (strcmp($username, $user->getLogin())==0 )
        {
           if (strcmp($pwd, $user->getPassword())==0 )
           {;
               return $user;
           }
        }
        return false;
     }

}
}
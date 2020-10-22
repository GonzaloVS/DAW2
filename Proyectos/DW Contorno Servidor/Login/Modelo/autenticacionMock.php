<?php

include_once 'C:\xampp\htdocs\Login\Vista\autenticar.php';

class autenticacionMock{
function autenticarUsuario($username, $pwd) {
    $listaUsuarios=Array(
        1 => new usuario("diego", "1234", "Diego", "Sin Apellidos"),
        2 => new usuario("Rodrigo", "qwerty", "Rodrigo", "Rodriguez"),
        3 => new usuario("TuMorenito19", "sion", "Matias", "Yavé"),
    );
     
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
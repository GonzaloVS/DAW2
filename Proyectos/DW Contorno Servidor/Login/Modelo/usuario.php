<?php

include_once 'C:\xampp\htdocs\Login\Vista\login.html';
include_once 'C:\xampp\htdocs\Login\Vista\autenticar.php';

class usuario{
    
    private $login;
    private $password;
    private $nombre;
    private $apellidos;
    
    /** @return mixed */
    public function getLogin()
    {
        return $this->login;
    }
    
    /** @param mixed $login */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /** @return mixed */
    public function getPassword()
    {
        return $this->password;
    }
    
    /** @param mixed $password */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /** @return mixed */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /** @param mixed $nombre */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
 
    /** @return mixed */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /** @param mixed $apellidos */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    
    
    function __construct($login, $password, $nombre, $apellidos) 
    {
        $this->login = $login;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }
    
}

<html>

<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>

<body>
<?php
if(isset($_COOKIE['intentos'])){    //si existe la cookie
    if($_COOKIE['intentos']==3)     //si el valor es 3
    {
        echo "Número máximo de intentos, espere un minuto";
        
    }
    else    //si no vale 3
    {
        echo "Usuario y/o contrase&ntildea incorrectos <br>";
        echo "Intentos fallidos: ".$_COOKIE['intentos'];
    }
}
else //si la cookie ya no tiene un valor o no ha sido seteada
    echo "Ha expirado el tiempo de autenticacion";
?>
<br>
<button type="button" onclick="location.href='login.php'">Volver</button>
<a href="login.php">volver</a>
</body>

</html>


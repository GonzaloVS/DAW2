<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>

<?php

if(isset($_COOKIE['intentos'])) //si tenemos valor de la cookie
{
    $intentos=$_COOKIE['intentos'];
}else{              //si no tenemos valor de la cookie
    $intentos=0;
    setcookie('intentos',$intentos,time()+15); //tiempo de 15s para probar sin tiempos de 60s
}




if ($intentos<3){   //si el número de intentos es menor de 3 mostrar el formulario
    echo '
	<form action="autenticar.php" method="post">
        
		<label for="username">Username:</label><br>
		<input type="text" id="username" name="username" required="required"><br>
        
		<label for="pwd">Password:</label><br>
		<input type="password" id="pwd" name="pwd" required="required"><br>
        
		<br> <input type="submit" value="Submit">
	</form>
';
}else{  //si el número de intentos es tres muestra este mensaje en vez del formulario 
    echo 'Número máximo de intentos alcanzado, espere 60 segundos';
}
	?>
</body>

</html>
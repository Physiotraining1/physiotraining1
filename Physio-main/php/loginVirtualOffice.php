<?php
//var_dump($_POST);
include 'crudFunctions.php';



//se obtienen los valores ingresados por el usuario
$user = $_POST['user'];
$pass = $_POST['pass'];

//ingresar registros en db
$respValidateLogin = validateLogin($user, $pass);

if($respValidateLogin == true) {
    echo "true";
}else {
    echo "<p style='color:  #ec7063;font-size: 20px;font-weight: bold; margin: 20px;'>Datos incorrectos</p>";
}

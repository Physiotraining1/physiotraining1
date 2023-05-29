<?php
//var_dump($_POST);
include 'crudFunctions.php';



//se obtienen los valores ingresados por el usuario
$id = $_POST['id'];

//ingresar registros en db
$respDelete = deleteUserFormById($id);

if($respDelete == true) {
    echo "true";
}else {
    echo "<p style='color:  #ec7063;font-size: 20px;font-weight: bold; margin: 20px;'>Datos incorrectos</p>";
}

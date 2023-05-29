<?php
//var_dump($_POST);
include 'crudFunctions.php';



//se obtienen los valores ingresados por el usuario
$id = $_POST['id'];
$idUser = $_POST['IDU'];
$nameC = $_POST['nameC'];
$age = $_POST['age'];
$city = $_POST['city'];
$email = $_POST['email'];

$pathology = $_POST['pathology'];
$service = $_POST['service'];
$observations = $_POST['observations'];

//ingresar registros en db
$respUpdate = updateUserFormById($idUser, $nameC, $age, $city, $email, $pathology, $service, $observations, $id);

if($respUpdate == true) {
    echo "true";
}else {
    echo "<p style='color:  #ec7063;font-size: 20px;font-weight: bold; margin: 20px;'>Datos incorrectos</p>";
}

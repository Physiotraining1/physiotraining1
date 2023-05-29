<?php
//var_dump($_POST);
include 'crudFunctions.php';



//se obtienen los valores ingresados por el usuario
$idUser = $_POST['ID'];
$nameC = $_POST['nameC'];
$age = $_POST['age'];
$city = $_POST['city'];
$email = $_POST['email'];

$pathology = $_POST['pathology'];
$service = $_POST['service'];
$observations = $_POST['observations'];

//ingresar registros en db
$respInst = insertUserForm($idUser, $nameC, $age, $city, $email, $pathology, $service, $observations);

if($respInst == true) {
  echo "<p style='color: var(--primary-color);font-size: 20px;font-weight: bold; margin: 20px;'>Registro insertado correctamente</p>";
}

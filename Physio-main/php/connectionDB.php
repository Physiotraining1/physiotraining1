<?php
$config = include 'config.php';

function conectarDB() {
  $config = include 'config.php';

  try {
    $conexion = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'], $config['db']['user'], $config['db']['pass'], $config['db']['options']);
    return $conexion;
  } catch(PDOException $error) {
    echo "Error al conectar a la base de datos: " . $error->getMessage();
    return null;
  }
}
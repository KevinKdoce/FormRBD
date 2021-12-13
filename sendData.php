<?php

require_once("./conexion.php");

$rut = $_POST['wpforms-21561-field_14'];
$name = $_POST['wpforms-21561-field_0'];
$last_name = $_POST['wpforms-21561-field_0-last'];
$email = $_POST['wpforms-21561-field_1'];
$phone = $_POST['wpforms-21561-field_7'];
$charge = $_POST['wpforms-21561-field_8'];
$Rbd = $_POST['wpforms-21561-field_6'];
$college = $_POST['nameCollege'];
$comuna = $_POST['nameComuna'];

$query = "INSERT INTO dataSend (Rut, Nombre, Apellido, Correo, Telefono, Cargo, RBD, Colegio, Comuna) VALUES ('$rut', '$name', '$last_name', '$email', '$phone', '$charge', '$Rbd',
'$college', '$comuna')";
$conexion = connection::connect();
$response = mysqli_query($conexion, $query);

// $rows = mysqli_affected_rows($conexion, $query);

// return $rows; 
echo $response;

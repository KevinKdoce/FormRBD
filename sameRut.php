<?php

require_once("./conexion.php");

$query = "SELECT Rut FROM dataSend";
$conexion = connection::connect();
$response = mysqli_query($conexion, $query);

$json = array();
while($row = mysqli_fetch_assoc($response)){
    $json[] = array(
        'rut' => $row['Rut'],
    );
}
$data = json_encode($json);
echo $data;
<?php

require_once("./conexion.php");

$query = "SELECT * FROM rbd";
$conexion = connection::connect();
$response = mysqli_query($conexion, $query);

$json = array();
while ($row = mysqli_fetch_array($response)) {
    $json[] = array(
        'id' => $row['id'],
        'rbd' => $row['RBD'],
        'dependencia' => $row['Dependencia'],
        'region' => $row['Region'],
        'comuna' => $row['Comuna'],
        'colegio' => $row['Colegio'],
    );
}
$data = json_encode($json);
echo $data;

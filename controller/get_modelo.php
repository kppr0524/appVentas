<?php
require "../conexion/conexion.php";

$id_mode = $_POST['id_modelo'];

$consultaM = "SELECT id_modelo, nombre_modelo FROM modelo WHERE id_marca = '$id_marca'";
$resultadoM = $mysqli->consultaM($consultaM);

$html = "<option value="0">seleccionar modelo</option>";

while ($rowM = $resultadoM->fetch_assoc()) {
    
    $html = "<option value='".$rowM['id_modelo']."'>".$rowM['nombre_modelo']."</option>";
    
}

echo = $html

?> 

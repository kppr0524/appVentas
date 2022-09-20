<?php
include "../conexion/conexion.php";

$nombre_marca = $_POST['nombre_marca'];
$nombre_modelo = $_POST['nombre_modelo'];
$cantidad_venta = $_POST['cantidad_venta'];
$precio_unidad = $_POST['precio_unidad'];

if ($venta != null || $ != null) {
	$agregar = "select from ventas, marca, modelo (nombre_marca,nombre_modelo,cantidad_venta,precio_unidad) 
	values('" . $nombre_marca . "','" . $nombre_modelo . "','" . $cantidad_venta . "','" . $precio_unidad . "')";
	$resultado = $conexion->query($agregar) or die("Error de Inserción" . mysqli_error($conexion));
}

?>

<script type="text/javascript">
	alert("Venta creada exitosamente");
	window.location.href = "../index.php";
</script>/
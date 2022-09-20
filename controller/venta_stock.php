<?php
include "../conexion/conexion.php";
$cantidad = 0;
$cantidadventa = 0;
$valoruni = 0;
$total = 0;

if(isset($_GET['idModelo'])){
    echo 'dentro del if';
    $sql = "SELECT stock_modelo, precio_unidad, cantidad_venta, total_venta FROM modelo, ventas 
    WHERE id_modelo = ?";
$stmt = $conexion->prepare($sql); 
$stmt->bind_param("i", $_GET['idModelo']);
$stmt->execute();
$resultadoS1 = $stmt->get_result();

/* $consultaS2="UPDATE ventas INNER JOIN modelo ON stock_modelo = id_modelo 
            SET cantidad_venta = stock_modelo - cantidad_venta WHERE id_modelo = fk_modelo";
$resultadoS2=$conexion->query($consultaS2); */


while ($row = mysqli_fetch_assoc($resultadoS1)) {
    echo $row['stock_modelo'];
    $cantidad=$row['stock_modelo'];
    $valoruni=$row["precio_unidad"];
    $cantidadventa=$row["cantidad_venta"];
    $total=$cantidad*$valoruni;
}
}
?>
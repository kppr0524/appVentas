<?php
require "../conexion/conexion.php";

//lo creamos de forma diferente

    $consultaM = "SELECT * FROM modelo";
    $resultadoM = mysqli_query($conexion, $consultaM);
    
    if(isset($_GET['idModelo'])){
        //print ("marca: " . $_GET['c']);
        echo "<option selected disabled>Seleccione un modelo</option>";
        while ($rowM = mysqli_fetch_array($resultadoM)) {
            //print ('id modelo: ' . $rowM['id_modelo']);
            if ($rowM['fk_marca'] == $_GET['idModelo']) {
                echo "<option value='".$rowM['id_modelo']."'>".$rowM['nombre_modelo']."</option>";
            }
        }
    }
?>
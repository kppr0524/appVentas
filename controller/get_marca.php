<?php
require "../conexion/conexion.php";

    $sql_consulta="SELECT * FROM marca";
    $resultado = $conexion->query($sql_consulta);

    while ($row = mysqli_fetch_array($resultado)) {
        echo"<option value='".$row['id_marca']."'>".$row['nombre_marca']."</option>";                                        
    }                                    
?>  
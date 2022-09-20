<?php
require "../conexion/conexion.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../styles/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../styles/estilos.css">
	<script type="text/javascript" src="../styles/js/bootstrap.bundle.min.js"></script>
    <script language= "javascript" src="../styles/js/jquery-3.6.1.min.js"></script>
	<title>Agregar venta</title>
</head>
<body>
	<div class="container mt-5">
		<div class="card-header">
			<div class="table-responsive" style="table-layout: auto;text-align: -webkit-center">
				<div class="table-wrapper">
					<div class="table-title">
						<div class="row">
						<div class="col-sm-6">
							<h2><b>Ingresa los datos de la venta:</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="../index.php" class="btn btn-success" data-toggle="modal"><span>Regresar</span></a>
						</div>
						<form class="p-4">
							<label class="col-sm-2 form-label">Marca: </label>
							
                            <select name="nombre_marca">
                                <option selected disabled>Seleccione una marca</option>
                                <?php
                                        $sql_consulta="SELECT * FROM marca";
                                        $resultado = $conexion->query($sql_consulta);
                                        while ($row = $resultado->fetch_array()) {
                                            $id=$row['id_marca'];
                                            $marca=$row['nombre_marca'];
                                    ?>
                                    <option value="<?php echo $id?>"><?php echo $marca ?></option>
                                    <?php        
                                        }                                    
                                    ?>
                            </select>
                            <label class="col-sm-2 col-form-label">Modelo: </label>
                            <select name="nombre_marca">
                                <option selected disabled>Seleccione un modelo</option>
                                    <?php 
                                        $sql_consulta="SELECT * FROM modelo";
                                        $resultado = $conexion->query($sql_consulta);
                                        while ($row = $resultado->fetch_array()) {
                                            $id_mode=$row['id_modelo'];
                                            $nombre=$row['nombre_modelo'];
                                    ?>
                                    <option value="<?php echo $id_mode?>"><?php echo $nombre ?></option>
                                    <?php        
                                        }                                    
                                    ?>
                            </select>                                 
												
                            <label class="col-sm-2 col-form-label">Cantidad: </label>
							<br>
							<label class="col-sm-2 col-form-label">Precio por unidad: </label>
							<br>
							<label class="col-sm-2 col-form-label">Total venta: </label>
							<br>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary me-md-2">Guardar</button>
							</div>
                            
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


</html>
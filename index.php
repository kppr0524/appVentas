<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles/style.css">
	<script type="text/javascript" src="styles/js/bootstrap.bundle.min.js"></script>
    <title>App Ventas NEC</title>
</head>
<body>
<?php
	include "conexion\conexion.php";
	$consulta = "select fecha_venta, nombre_marca, nombre_modelo, cantidad_venta, precio_unidad, total_venta 
    from marca, ventas, modelo 
    where fk_modelo=id_modelo and id_marca=fk_marca";
	$resultado = $conexion->query($consulta) or die("Error de Consulta" . mysqli_error($conexion));

	?>
</tr>
    <h1  class="titulo" style="text-align: -webkit-center;">App Ventas NEC</h1>
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<div class="table-responsive" style="table-layout: auto;text-align: -webkit-center";>
					<div class="table-wrapper">
						<div class="table-title">
							<div class="row">
								<div class="col-sm-6">
									<h2>INFORME DE VENTAS <b>Registro y seguimiento</b></h2>
								</div>
								<div class="col-sm-6">
									<a href="controller/form_add.php" class="btn btn-success" data-toggle="modal"><span>Agregar nueva venta</span></a>
								</div>
								<div class="p-4">
									<table class="table table-striped">
										<thead>

                                        <tr>
                                                <th scope="col">FECHA VENTA</th>
												<th scope="col">MARCA</th>
												<th scope="col">MODELO</th>
												<th scope="col">CANTIDAD VENDIDA</th>
												<th scope="col">PRECIO UNITARIO</th>
                                                <th scope="col">TOTAL VENTA</th>
										</tr>
            <?php 
            while ($row = mysqli_fetch_assoc($resultado)) {
			?>
				<tr>
					<td scope="row"><?php echo $row['fecha_venta'] ?></td>
                    <td><?php echo $row['nombre_marca'] ?></td>
					<td><?php echo $row['nombre_modelo'] ?></td>
					<td><?php echo $row['cantidad_venta'] ?></td>
	    			<td><?php echo $row['precio_unidad'] ?></td>
                    <td><?php echo $row['total_venta'] ?></td>
		    	</tr>
                <?php } ?>
											
										</thead>
										<tbody>
                                        
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
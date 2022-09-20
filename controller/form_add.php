
<?php
require "../conexion/conexion.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../styles/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../styles/style.css">
	<script type="text/javascript" src="../styles/js/bootstrap.bundle.min.js"></script>
    <script language= "javascript" src="../styles/js/jquery-3.6.1.min.js"></script>
	<title>Agregar venta</title>
    <script>
        function muestradatos(str) {
            var conexion;

            if(str==""){
                return;
            }
            if(window.XMLHttpRequest){
                conexion = new XMLHttpRequest();
            }
            conexion.onreadystatechange=function(){
                //console.log('Status: ' , conexion.status);
                //console.log('responseText: ' , conexion.responseText);
                if (conexion.readyState == 4 && conexion.status == 200){
                    document.getElementById("modelo").innerHTML=conexion.responseText;
                }
            }
            conexion.open("GET","get_modelo.php?idModelo="+str, true);
            conexion.send();
        }

        function consutaCantidad(str) {
            var conexion;

            if(str==""){
                return;
            }
            if(window.XMLHttpRequest){
                conexion = new XMLHttpRequest();
            }
            conexion.onreadystatechange=function(){
                console.log('Status: ' , conexion.status);
                console.log('responseText: ' , conexion.responseText);
                if (conexion.readyState == 4 && conexion.status == 200){
                    document.getElementById("modelo").innerHTML=conexion.responseText;
                }
            }
            conexion.open("GET","venta_stock.php?idModelo="+str, true);
            conexion.send();
        }
    </script>
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
                            <select name="nombre_marca" id="marca" onchange="muestradatos(this.value)">
                                <option selected disabled>Seleccione una marca</option>
                                <?php
                                include "get_marca.php";
                                ?> 
                            </select>
                            <label class="col-sm-2 col-form-label">Modelo: </label>
                            <select name="nombre_modelo" id="modelo" onchange="consutaCantidad(this.value)">
                            <option selected disabled>Seleccione un modelo</option>
                            <?php
                                include "get_modelo.php";
                                ?> 
                            </select>                              
							<script language="text/javaScript">
                                function validarstock(){
                                    valor1=document.getElementById('stock_modelo').value;
                                    valor2=document.getElementById('cantidad_venta').value;
                                    if (valor1 > valor2){
                                        alert("La Cantidad Excede El Stock");
                                            return false;
                                    }else
                                        alert("Gracias Por Su Compra");
                                    }
                            </script> 					
                            <div class="cantidad">
                            <?php
                                include "venta_stock.php";
                                ?>
                            <label class="col-sm-2 col-form-label">Cantidad: <?php echo $cantidad?></label>
                              </div>
                                <div class="valoruni">
							<label class="col-sm-2 col-form-label">Precio por unidad: </label>
							<br>
                            </div>
                            <div class="cantidadventa">
							<label class="col-sm-2 col-form-label">Cantidad venta: </label>
                            <input type='text' id ='stock' name='stock' value='' >
							<br>
                            </div>
                            <div class="total">
                            <label class="col-sm-2 col-form-label">Total venta: </label>          
                            </div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary me-md-2">Comprar</button>
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
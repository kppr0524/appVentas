<?php

include "../conexion/conexion.php";

$("#marca").change(function(){
	 		var parametros= "id="+$("#marca").val();
	 		$.ajax({
                data:  parametros,
                url:   '.php',
                type:  'post',
                beforeSend: function () { },
                success:  function (response) {                	
                    $("#provincias").html(response);
                },
                error:function(){
                	alert("error")
                }
            });
})



?>
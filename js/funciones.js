$(document).ready(function () {
	$("#export-btn").click(function(){
		location.href="componentes/excel.php";
	});
});


function agregardatos(inventario,procedencia,equipo,marca,modelo,estModelo,serie,marcaDisco,capDisco,ram,
                      fechaIngreso,fechaSalida){


    cadena ="inventario=" + inventario +
    		    "&procedencia=" + procedencia +
    			  "&equipo=" + equipo +
          	"&marca=" + marca +
        	  "&modelo=" + modelo +
          	"&estModelo=" + estModelo +
          	"&serie=" + serie +
          	"&marcaDisco=" + marcaDisco +
          	"&capDisco=" + capDisco +
          	"&ram=" + ram +
            "&fechaIngreso=" + fechaIngreso +
            "&fechaSalida=" + fechaSalida;

            $.ajax({
            		type:"POST",
            		url:"php/agregarDatos.php",
            		data:cadena,
            		success:function(r){
                  //console.log(r);
            			if(r==1){
            				$('#tabla').load('componentes/tabla.php');
            				alertify.success("Agregado con exito :)");
            			}else{
            				alertify.error("Fallo el servidor");
            			}
            		}
            	});

            }

        function agregarform(datos){

        		d=datos.split('||');

      	$('#idEquiposq').val(d[0]);
      	$('#inventarioq').val(d[1]);
      	$('#procedenciaq').val(d[2]);
    		$('#equipoq').val(d[3]);
    		$('#marcaq').val(d[4]);
    	  $('#modeloq').val(d[5]);
    	  $('#estModeloq').val(d[6]);
      	$('#serieq').val(d[7]);
	      $('#marcaDiscoq').val(d[8]);
      	$('#capDiscoq').val(d[9]);
        $('#ramq').val(d[10]);
        $('#fechaingresoq').val(d[11]);
        $('#fechasalidaq').val(d[12]);


            }

        function actualizaDatos(){
      	var id=$('#idEquiposq').val();
      	var inventario=$('#inventarioq').val();
        var procedencia=$('#procedenciaq').val();
        var equipo=$('#equipoq').val();
        var marca=$('#marcaq').val();
        var modelo=$('#modeloq').val();
        var estModelo=$('#estModeloq').val();
        var serie=$('#serieq').val();
        var marcaDisco=$('#marcaDiscoq').val();
        var capDisco=$('#capDiscoq').val();
        var ram=$('#ramq').val();
        var fechaIngreso=$('#fechaingresoq').val();
        var fechaSalida=$('#fechasalidaq').val();


      cadena = "idEquipos=" + id +
                "&inventario=" + inventario +
                "&procedencia=" + procedencia +
                "&equipo=" + equipo +
                "&marca=" + marca +
                "&modelo=" + modelo +
                "&estModelo=" + estModelo +
                "&serie=" + serie +
                "&marcaDisco=" + marcaDisco +
        				"&capDisco=" + capDisco +
        				"&ram=" + ram +
        				"&fechaIngreso=" + fechaIngreso +
        				"&fechaSalida=" + fechaSalida;

        					$.ajax({
      						    type:"POST",
            				  url:"php/actualizaDatos.php",
            					data:cadena,
            					success:function(r){
            						console.log(r);
            						if(r==1){
            							$('#tabla').load('componentes/tabla.php');
            							alertify.success("Actualizado con Exito");
          							}else{
          								alertify.error("Fallo el servidor");
            							}
            						}
            					});
            }

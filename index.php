<!DOCTYPE HTML>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Soporte Tecnico</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/miscss.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="librerias/select2/select2-4.0.3/dist/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
	<script src="librerias/select2/select2-4.0.3/dist/js/select2.js"></script>

	<head>
<body>

	<div class="container">
		<div id="buscador"></div>
		<div id="tabla"></div>

	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo equipo</h4>
      </div>
			<form id="miform">
				<div class="modal-body">
						<label>Inventario</label>
						<input type="text" hidden="" id="idEquipos" name="">
						<input type="text" name="" placeholder="Inventario" id="inventario"  class="form-control input-sm">
						<label>Departamento de procedencia</label>
						<input type="text" name="" placeholder="Procedencia" id="procedencia" class="form-control input-sm">
						<label>Equipo</label>
						<input type="text" name="" placeholder="Equipo de computo" id="equipo" class="form-control input-sm">
						<label>Marca del Equipo</label>
						<input type="text" name="" placeholder="Marca" id="marca" class="form-control input-sm">
						<label>Modelo</label>
						<input type="text" name=""placeholder="Modelo" id="modelo" class="form-control input-sm">
						<label>Extension del Modelo</label>
						<input type="text" name="" placeholder="Extension" id="estModelo" class="form-control input-sm">
						<label>Serie del equipo</label>
						<input type="text" name="" placeholder="Serie"id="serie" class="form-control input-sm">
						<label>Marca del Disco Duro</label>
						<input type="text" name="" placeholder="Marca del disco" id="marcaDisco" class="form-control input-sm">
						<label>Capacidad de Disco Duro</label>
						<input type="text" name="" placeholder="Capcidad del Disco" id="capDisco" class="form-control input-sm">
						<label>Capacidad Ram</label>
						<input type="text" name="" placeholder="Memoria Ram" id="ram" class="form-control input-sm">
						<label>Fecha de Ingreso</label>
						<input type="date" name="fecha1" min="2017-1-1" max="2022-12-31" step="2" placeholder="Ingreso del equipo" id="fechaingreso" class="form-control input-sm">
						<label>Fecha de Salida</label>
						<input type="date" name="fecha2" min="2017-1-1" max="2022-12-31" step="2" placeholder="Salida del equipo" id="fechasalida" class="form-control input-sm">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
					Agregar
					</button>

				</div>

			</form>

    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
				<label>Inventario</label>
				<input type="text" hidden="" id="idEquiposq" name="">
				<input type="text" name="" id="inventarioq" class="form-control input-sm">
				<label>Departamento de procedencia</label>
				<input type="text" name="" id="procedenciaq" class="form-control input-sm">
				<label>Equipo</label>
				<input type="text" name="" id="equipoq" class="form-control input-sm">
				<label>Marca del Equipo</label>
				<input type="text" name="" id="marcaq" class="form-control input-sm">
				<label>Modelo</label>
				<input type="text" name="" id="modeloq" class="form-control input-sm">
				<label>Extension del Modelo</label>
				<input type="text" name="" id="estModeloq" class="form-control input-sm">
				<label>Serie del equipo</label>
				<input type="text" name="" id="serieq" class="form-control input-sm">
				<label>Marca del Disco Duro</label>
				<input type="text" name="" id="marcaDiscoq" class="form-control input-sm">
				<label>Capacidad de Disco Duro</label>
				<input type="text" name="" id="capDiscoq" class="form-control input-sm">
				<label>Capacidad Ram</label>
				<input type="text" name="" id="ramq" class="form-control input-sm">
				<label>Fecha de Ingreso</label>
				<input type="date" name="fecha1" min="2017-1-1" max="2023-12-31" step="2" id="fechaingresoq" class="form-control input-sm">
				<label>Fecha de Salida</label>
				<input type="date" name="fecha2" min="2017-1-1" max="2024-12-31" step="2" id="fechasalidaq" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>

      </div>
    </div>
  </div>
</div>

</body>
</html>
<!----------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
		$('#buscador').load('componentes/buscador.php');
	});
</script>
<!----------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript">
	$(document).ready(function(){
		$('#guardarnuevo').click(function(){
			inventario=$('#inventario').val();
			procedencia=$('#procedencia').val();
			equipo=$('#equipo').val();
			marca=$('#marca').val();
			modelo=$('#modelo').val();
			estModelo=$('#estModelo').val();
			serie=$('#serie').val();
			marcaDisco=$('#marcaDisco').val();
			capDisco=$('#capDisco').val();
			ram=$('#ram').val();
			fechaIngreso=$('#fechaingreso').val();
			fechaSalida=$('#fechasalida').val();
			agregardatos(inventario,procedencia,equipo,marca,modelo,estModelo,serie,marcaDisco,capDisco,ram,
			                      fechaIngreso,fechaSalida);
		});

				$('#actualizadatos').click(function(){
						actualizaDatos();
			});
	});
</script>
<!----------------------------------------------------------------------------------------------------------------------->


<?php
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>Inventario de entrada y salida de Equipos</h2>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo equipo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>

		<div class="row">
			<div class="col-sm-2">
				<a class="btn btn-warning" id="export-btn">Exportar Tabla</a>
			</div>

			<tr>
				<td><h4>Inventario</h4></td>
				<td>Departamento de Procedencia</td>
				<td>Tipo de Equipo</td>
				<td>Marca del equipo</td>
				<td>Modelo</td>
				<td>Ext. Modelo</td>
				<td>Serie</td>
				<td>Marca del Disco Duro</td>
				<td>Capacidad del Disco</td>
				<td>Memoria Ram</td>
				<td>Fecha de ingreso</td>
				<td>Fecha de Salida</td>
				<td>Editar</td>
			</tr>

			<?php
				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idEquipos=$_SESSION['consulta'];

						$sql="SELECT idEquipos, nInventario, procedencia, equipo, marca, modelo, estModelo,serie, marcaDisco, capDisco, ram, fechaIngreso, fechaSalida
								from equipos where idEquipos='$idEquipos'";
							}else{
								$sql="SELECT idEquipos, nInventario, procedencia, equipo, marca, modelo, estModelo,serie, marcaDisco, capDisco, ram, fechaIngreso, fechaSalida
										from equipos";
							}
						}else{
							$sql="SELECT idEquipos, nInventario, procedencia, equipo, marca, modelo, estModelo,serie, marcaDisco, capDisco, ram, fechaIngreso, fechaSalida
									from equipos";

						}


				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){


					$datos= $ver[0]."||".
								 	$ver[1]."||".
								 	$ver[2]."||".
			 					 	$ver[3]."||".
								 	$ver[4]."||".
			 					 	$ver[5]."||".
			 					 	$ver[6]."||".
			 					 	$ver[7]."||".
								 	$ver[8]."||".
						 		 	$ver[9]."||".
						 		 	$ver[10]."||".
						 		 	$ver[11]."||".
							   	$ver[12];
			 ?>
			<tr>

				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php echo $ver[8] ?></td>
				<td><?php echo $ver[9] ?></td>
				<td><?php echo $ver[10] ?></td>
				<td><?php echo $ver[11] ?></td>
				<td><?php echo $ver[12] ?></td>

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal"
					data-target="#modalEdicion" onclick="agregarform('<?php echo $datos ?>')">
					</button>
				</td>
			</tr>
			<?php
		}
			 ?>
		</table>
	</div>
	<script src="js/funciones.js"></script>
</div>

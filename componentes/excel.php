<?php

	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();


  header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=TablaEquiposSoporte.xls");



  echo '
      <table class="table table-hover table-condensed table-bordered">
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
      </tr>';

			if(isset($_SESSION['consulta'])){
				if ($_SESSION['consulta'] > 0){
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

			echo'
				<tr>
				<td>'. $ver[1] .'</td>
				 <td>'. $ver[2] .'</td>
				 <td>'. $ver[3] .'</td>
				 <td>'. $ver[4] .'</td>
				 <td>'. $ver[5] .'</td>
				 <td>'. $ver[6] .'</td>
				 <td>'. $ver[7] .'</td>
				 <td>'. $ver[8] .'</td>
				 <td>'. $ver[9] .'</td>
				 <td>'. $ver[10].'  </td>
				 <td>'. $ver[11].'  </td>
				 <td>'. $ver[12].'  </td>

				<tr>

		</td>
	</tr>';
}
			 				// ================

			echo '</table>';


?>

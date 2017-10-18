<?php

	require_once "conexion.php";
	$conexion=conexion();

	$a=$_POST['inventario'];
	$b=$_POST['procedencia'];
	$c=$_POST['equipo'];
	$d=$_POST['marca'];
	$e=$_POST['modelo'];
	$f=$_POST['estModelo'];
	$g=$_POST['serie'];
	$h=$_POST['marcaDisco'];
	$i=$_POST['capDisco'];
	$j=$_POST['ram'];
	$k=$_POST['fechaIngreso'];
	$l=$_POST['fechaSalida'];


	 $sql="INSERT into equipos (nInventario, procedencia, equipo, marca, modelo, estModelo,serie,
                      marcaDisco, capDisco, ram, fechaIngreso, fechaSalida)
								values ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";

								echo $result=mysqli_query($conexion,$sql);

 ?>

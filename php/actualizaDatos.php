<?php

	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['idEquipos'];
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


		$sql="UPDATE equipos set nInventario='$a', procedencia='$b', equipo='$c', marca='$d', modelo='$e',
		 													estModelo='$f', serie='$g', marcaDisco='$h', capDisco='$i', ram='$j', fechaIngreso='$k', fechaSalida='$l' where idEquipos='$id'";


		echo $result=mysqli_query($conexion,$sql);

 ?>

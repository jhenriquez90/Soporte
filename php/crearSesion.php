<?php
	session_start();

	$idequi=$_POST['valor'];

	$_SESSION['consulta']=$idequi;

	echo $idequi;

 ?>

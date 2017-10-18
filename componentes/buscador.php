<?php

  require_once "../php/conexion.php";
  $conexion=conexion();

  $sql="SELECT idEquipos, nInventario, procedencia, equipo, marca, modelo,
              estModelo,serie, marcaDisco, capDisco, ram, fechaIngreso,
              fechaSalida from equipos";

       $result=mysqli_query($conexion,$sql);


        ?>

        <br><br>
       <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-4">
          <label>Buscador de Equipos</label>
          <select id="buscadorvivo" class="form-control input-sm">
            <option value="0">Seleciona uno</option>
            <?php
              while($ver=mysqli_fetch_row($result)):
             ?>
              <option value="<?php echo $ver[0] ?>">
                <?php echo $ver[1]." ".$ver[4] ?>
              </option>

            <?php endwhile; ?>

          </select>
        </div>
       </div>

       	<script type="text/javascript">
       		$(document).ready(function(){
       			$('#buscadorvivo').select2();

       			$('#buscadorvivo').change(function(){
       				$.ajax({
       					type:"post",
       					data:'valor=' + $('#buscadorvivo').val(),
       					url:'php/crearsession.php',
       					success:function(r){
       						$('#tabla').load('componentes/tabla.php');
       					}
       				});
       			});
       		});

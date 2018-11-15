<?php
require_once('../config/conf.php');
require_once('../controlador/metodos.php');

 ?>



<div class="container">
	<div class="col-sm-12">
		
		<table class="table table-striped" >
			<caption>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#nuevoUsuario"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo Usuario</button>
				<?php include_once('../modal/newuser.php'); ?> <!-- llamando al modalpara nuevo usuario -->
				<a href="" class="btn btn-success">Imprimir</a><br>
			</caption>
			<tr>
				<td>Eliminar</td>
 				<td>Editar</td>
 				<!--<td>id</td>-->
				<td>Usuario</td>
				<td>Clave</td>
				<td>Nombres</td>
				<td>Paterno</td>
				<td>Materno</td>
				<td>Observacion</td>
				<td>Estado</td>
			</tr>


			<?php
			$Datos = "SELECT * FROM alm.usuarios ORDER BY id_usuarios";
			$resDatos = pg_query($Datos)or die('consulta fallida'.pg_last_error());
			/*$rows=pg_num_rows($resDatos,, null, PGSQL_ASSOC);*/
			while($row=pg_fetch_array($resDatos)){
				if ($row[7]==0) {
					$row[7] = 'activo';
				}else{
					$row[7]='inactivo';
				}

				$datosUsuario= $row[0]."||".
 				$row[1]."||".
 				$row[2]."||".
 				$row[3]."||".
 				$row[4]."||".
 				$row[5]."||".
 				$row[6]."||".
 				$row[7];

 				
				?>

				<tbody>
					<tr>
						<td>
 							<button class="btn btn-danger glyphicon glyphicon-remove"   
 							onclick="preguntarSiNoUsuario('<?php echo $row[0] ?>')" > Eliminar</button>

 						</td>

 						<td>
 							<button class="btn btn-warning glyphicon glyphicon-pencil " data-toggle="modal" data-target="#editarmodal" onclick="agregaformUsuarios('<?php echo $datosUsuario ?>')"> Editar</button>
 						</td>

						<td><?php echo $row[1] ?></td>
 						<td><?php echo $row[2] ?></td>
 						<td><?php echo $row[3] ?></td>
						<td><?php echo $row[4] ?></td>
 						<td><?php echo $row[5] ?></td>
 						<td><?php echo $row[6] ?></td>
 						<td><?php echo $row[7] ?></td>

					</tr>
				</tbody>
			<?php

			}
			?>

		</table>	
	</div>
</div>
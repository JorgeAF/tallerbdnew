<?php
require_once('../config/conf.php');
require_once('../controlador/metodos.php');

 ?>
 <div class="row">
 	<div class="col-sm-12">

 		<table class="table table-striped" >
 			<caption>
 				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#nuevomodal"><span class="glyphicon glyphicon-plus"></span> Nuevo Item</button>
 				<?php include_once('../modal/newitem.php'); ?> <!-- llamando al modalpara nuevo item -->
 				<a href="" class="btn btn-success">Imprimir</a><br>
 			</caption>
 			<tr>
 				<td>Eliminar</td>
 				<td>Editar</td>
 				<!--<td>id</td>-->
 				<td>Descripcion</td>
 				<td>Codigo</td>
 				<td>unidad</td>
 				<td>ubicacion</td>
 				<td>partida p.</td>
 			</tr>


 			<?php
 			$Datos = "SELECT * FROM alm.items WHERE removido_flag=0 ORDER BY id_item";
 			$resDatos = pg_query($Datos)or die('consulta fallida'.pg_last_error());
 			/*$rows=pg_num_rows($resDatos);*/
 			while($ver=pg_fetch_array($resDatos)){
 				$datos= $ver[0]."||".
 				$ver[1]."||".
 				$ver[2]."||".
 				$ver[3]."||".
 				$ver[5]."||".
 				$ver[6];
 				?>
 				<tbody>
 					<tr>
 						<td>
 							<button class="btn btn-danger glyphicon glyphicon-remove"   
 							onclick="preguntarSiNo('<?php echo $ver[0] ?>')"> Eliminar</button>

 						</td>

 						<td>
 							<button class="btn btn-warning glyphicon glyphicon-pencil " data-toggle="modal" data-target="#editarmodal" onclick="agregaform('<?php echo $datos ?>')"> Editar</button>
 						</td>
 						<td><?php echo $ver[1] ?></td>
 						<td><?php echo $ver[2] ?></td>
 						<td><?php echo $ver[3] ?></td>
 						<td><?php echo $ver[5] ?></td>
 						<td><?php echo $ver[6] ?></td>
 					</tr>
 				</tbody>
 				<?php
 			}
 			?>						

 		</table>

 	</div>
 </div>

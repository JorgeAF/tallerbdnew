<?php
require_once('config/conf.php');
require_once('controlador/metodos.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script type="text/javascript" scr="script.js"></script>
	<!--<script src="jquery-3.3.1.min"></script>-->
	<title></title>
	<!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link src="bootstrap/js/bootstrap.min.js" >
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="alertifyjs/css/themes/default.css">
    <script src="js1/jquery-3.1.1.min.js"></script>
    <script src="js1/main.js"></script>
  	<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  	<script src="alertifyjs/alertify.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			
			<!-- inicio menu de navegacion-->	
			<nav class="navbar navbar-inverse">
				<ul class="nav navbar-nav">
					<li><a href="index.php"> INICIO</a></li>
					<li><a href="vistas/usuario.php"> USUARIOS</a></li>
					<li><a href="index.php"> ITEMS</a></li>
					<li><a href="kardex.php"> KARDEX</a></li>
					<li><a href="entradas.php"> ENTRADAS</a></li>
					<li><a href="salidas.php"> SALIDAS</a></li>
				</ul>
			</nav>
			<!-- fin menu de navegacion-->


			<!-- Panel de busqueda-->
			<div class="container">
				<h1>Gestion items</h1>
				<div class="panel panel-default">

					<div class="panel-heading">Buscar items</div>
					<div class="panel-body">


						<form class="form-inline" method="POST" action="controlador/resultado.php">
							<div class="row">

								<div class="col-md-1"></div>

								<div class="col-md-10">
									<div class="form-group">
										<label for="exampleInputName2" class="control-label">Codigo</label> 
										<input type="text" class="form-control" id="textoCodigo" name="codigo" placeholder="">
									</div>

									<div class="form-group">
										<label for="exampleInputName2">Descripcion</label>
										<input type="text" class="form-control" id="textoDescripcion" name="descripcion" placeholder="">
									</div><br>



									<div style="padding-right: 50px;" class="form-group">
										<label for="exampleInputName2">Unidad</label>
										<select name="unidad">
											<option value="0">Seleccione</option>
											<?php
											$cons = "SELECT * from alm.items order by id_item ";
											$resul = pg_query($cons)or die('consulta fallida'.pg_last_error());
											while ($resun=pg_fetch_array($resul,NULL)) {
												?>
												<option value="<?php echo $datosit['id_item'];  ?>"><?php echo $resun['unidad'];  ?></option>
											<?php } ?>
										</select>
									</div>

									<div style="padding-left: 75px;" class="form-group">
										<label for="exampleInputName2">Ubicacion</label>
										<select name="ubicacion">
											<option value="0">Seleccione</option>
											<?php
											$cons = "SELECT * from alm.items order by id_item ";
											$resul = pg_query($cons)or die('consulta fallida'.pg_last_error());
											while ($resub=pg_fetch_array($resul,NULL)) {
												?>
												<option value="<?php echo $datosit['id_item'];  ?>"><?php echo $resub['ubicacion'];  ?></option>
											<?php } ?>
										</select>
									</div><br>

									<div class="form-group">
										<label for="exampleInputName2">partida presup.</label>
										<select name="partida">
											<option value="0">Seleccione</option>
											<?php
											$cons = "SELECT * from alm.items order by id_item ";
											$resul = pg_query($cons)or die('consulta fallida'.pg_last_error());
											while ($resun=pg_fetch_array($resul,NULL)) {
												?>
												<option value="<?php echo $datosit['id_item'];  ?>"><?php echo $resun['partida_p'];  ?></option>
											<?php } ?>
										</select>
									</div><br>

									<input  class="btn btn-primary" type="submit" id="btn-submit" value="Buscar">
								</div>

								<div class="col-md-1"></div>
							</div>
						</form>
					</div>
				</div>	

				<hr>
			</div>
			<!-- Fin del Panel de busqueda-->


			<!-- div de la tabla items-->
			<div class="container">
				<div id="tabla"></div>
			</div>
			<!-- fin del div de la tabla items-->
		</div>
	</div>

	
		<!-- modal de editar items-->
	<div class="modal fade" id="editarmodal" role="dialog">
		<div class="modal-dialog modal-xs">
			<div class="modal-content">

				<div class="modal-header">
					<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
					<h3 class="modal-title"><strong>EDITAR ITEM</strong></h3>
				</div>

				<div class="modal-body">
					<form class="form-horizontal" action="" method="POST">
						<fieldset>
							<legend>Detalles del Item</legend>
							<input type="text" hidden="" id="idpersone" name="">

							<div class="form-group">
								<label class="control-label col-sm-4" for="descripcione">Descripcion:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" required id="descripcione" placeholder="Edite su descripcion" name="descripcione">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-4" for="codigoe">Codigo:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" required id="codigoe" placeholder="Edite su Codigo" name="codigoe">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-4" for="unidade">Unidad:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" required id="unidade" placeholder="Edite su unidad" name="unidade">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-4" for="ubicacione">Ubicacion:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" required id="ubicacione" placeholder="Edite su ubicacion" name="ubicacione">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-4" for="partidae">Partida Presupuestaria:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" required id="partidae" placeholder="Edite su partida presupuestaria" name="partidae">
								</div>
							</div>

						</fieldset>
						<div class="form-group">        
							<div class="col-sm-offset-4 col-sm-8">
								<button type="submit" name="edita" class="btn btn-warning" id="actualizadatos" data-dismiss='modal' >Actualizar</button>
							</div>
						</div>
					</form> 

				</div>

				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Volver</button>
				</div>

			</div>
		</div>
	</div>
			<!-- fin del modal de items-->


	<script type="text/javascript">
		$(document).ready(function() {
			$('#tabla').load('include/tabla.php');	

			$('#actualizadatos').click(function() {
				actualizaDatos();
			});

		});
	</script>

	<!--<script type="text/javascript">
		$(document).ready(function() {
			$('#actualizadatos').click(function() {
				actualizaDatos();
			});
		});
	</script>-->

</body>
</html>
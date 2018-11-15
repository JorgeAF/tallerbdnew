<?php
require_once('../config/conf.php');
require_once('../controlador/metodos.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script type="text/javascript" scr="script.js"></script>
	<!--<script src="jquery-3.3.1.min"></script>-->
	<title></title>
	<!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../js1/main.js"></script>
    <link src="../bootstrap/js/bootstrap.min.js" >
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="../alertifyjs/css/themes/default.css">
    <script src="../js1/jquery-3.1.1.min.js"></script>
  	<script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>
  	<script src="../alertifyjs/alertify.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">

			<!-- inicio menu de navegacion-->
			<nav class="navbar navbar-inverse">
				<ul class="nav navbar-nav">
					<li><a href="../index.php">INICIO</a></li>
					<li><a href="usuario.php">USUARIOS</a></li>
					<li><a href="../index.php">ITEMS</a></li>
					<li><a href="kardex.php"> KARDEX</a></li>
					<li><a href="../entradas.php"> ENTRADAS</a></li>
					<li><a href="../salidas.php"> SALIDAS</a></li>
				</ul>
			</nav>
			<!-- fin menu de navegacion-->


			<!-- Panel de busqueda-->
			<div class="container">
				<h1>Gestion usuarios</h1>
				<div class="panel panel-default">

					<div class="panel-heading">Buscar usuarios</div>
					<div class="panel-body">


						<form class="form-inline" method="POST" action="usuario_resultado.php">
							<div class="row">

								<div class="col-md-1"></div>

								<div class="col-md-10">
									<div class="form-group">
										<label for="exampleInputName2" class="control-label">Usuario</label> 
										<input type="text" class="form-control"  name="usuario" placeholder="">
									</div>

									<div class="form-group">
										<label for="exampleInputName2">Nombres</label>
										<input type="text" class="form-control" id="textonombre  placeholder="nombre1 nombre2" name="nombres" placeholder="">
									</div><br><br>


									<div class="form-group">
										<label for="exampleInputName2">Paterno</label>
										<input type="text" class="form-control" id="textopaterno"  name="paterno" placeholder="">
									</div>
									<div class="form-group">
										<label for="exampleInputName2">Materno</label>
										<input type="text" class="form-control" id="textomaterno"  name="materno" placeholder="">
									</div> <br><br>
									<div class="form-group">
										<label for="exampleInputName2">Estado</label>
										<select name="estado" >
											<option value="0">activo</option>
											<option value="1">inactivo</option>
										</select>
									</div>
									<div class="form-group" >
										<label for="exampleInputName2">Clave</label>
										<input  type="text" class="form-control" id="textoDescripcion"  name="clave" placeholder="">
									</div><br><br>


									<input  class="btn btn-primary" type="submit" id="btn-submit" value="Buscar">
								</div>

							</div>
						</form>
					</div>
				</div>	

				<hr>
			</div>
			<!-- Fin del Panel de busqueda-->


			<!-- div de la tabla usuarios-->
			<div class="container">
				<div id="tablaUsuarios"></div>
			</div>
			<!-- fin del div de la tabla usuarios-->
		</div>
	</div>
	

	<!-- modal de editar usuarios-->
	<div class="modal fade" id="editarmodal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
					<h3 class="modal-title"><strong>EDITAR USUARIO</strong></h3>
				</div>

				<div class="modal-body">
					<form class="form-horizontal" action="" method="POST">
						<fieldset>
							<legend>Detalles del Usuario</legend>
							<input type="text" hidden="" id="idupersone" name="">
							<div class="form-group">
								<label class="control-label col-sm-4" for="usuarioe">Usuario:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="usuarioe" placeholder="Edite su Usuario" name="">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-4" for="clavee">Clave:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="clavee" placeholder="Edite su Clave" name="">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-4" for="nombrese">Nombres:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="nombrese" placeholder="Edite sus Nombres" name="">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-4" for="paternoe">Paterno:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="paternoe" placeholder="Edite su apellido paterno" name="">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-4" for="maternoe">Materno:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="maternoe" placeholder="Edite su apellido materno" name="">
								</div>
							</div>	

							<div class="form-group">
								<label class="control-label col-sm-4" for="observacione">Observacion:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="observacione" placeholder="Edite su Observacion" name="">
								</div>
							</div>
							<div hidden="" class="form-group">
								<label class="control-label col-sm-4" for="activoflag">Estado:</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="activoflag"  name="">
								</div>
							</div>
                  </fieldset>
                  <div class="form-group">        
                  	<div class="col-sm-offset-4 col-sm-8">
                  		<button type="submit" name="edita" class="btn btn-warning" id="actualizausuario" data-dismiss='modal' >Actualizar</button>
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
	<!-- fin del modal de usuarios-->

	<script type="text/javascript">
		$(document).ready(function() {
			$('#tablaUsuarios').load('../include/tablaUsuarios.php');	
			});
			$('#actualizausuario').click(function() {
				actualizaDatosUsuarios();
			});
	</script>

<!-- 	<script type="text/javascript">
	$(document).ready(function() {
	});
</script>
 -->
</body>
</html>
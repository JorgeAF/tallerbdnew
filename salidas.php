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
				<h1>Gestion Salidas Kardex</h1>
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
											<option>pza</option>
											<option>ltrs</option>
										</select>
									</div>

									<div style="padding-left: 75px;" class="form-group">
										<label for="exampleInputName2">Ubicacion</label>
										<select name="ubicacion">
											<option>almacen1</option>
											<option>almacen2</option>
											<option>almacen3</option>
										</select>
									</div><br>

									<div class="form-group">
										<label for="exampleInputName2">partida presup.</label>
										<select name="partida">
											<option>1000</option>
											<option>1100</option>
											<option>1200</option>
											<option>500</option>
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

		</div>
	</div>

</body>
</html>
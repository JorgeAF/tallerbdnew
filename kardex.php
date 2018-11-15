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
        <!-- inicio menu de navegacion-->	
        <div class="row">
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
        </div>
        <!-- fin menu de navegacion-->

		<!-- Panel de busqueda-->
        <div class="container">
            <!-- Titulo kardex -->
            <div class="row">
                <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
                    <h1>Kardex</h1>
                </div>
            </div><br>
            <!--Fin Titulo kardex -->

            <!-- Formulario de busqueda y tabla Item-->
            <div class="row">
                <!-- buscador Select -->
                <div class="col-sm-offset-1 col-sm-4">
                    <div><h3><strong>Seleccione Item:</strong></h3></div>

                    <form class="form-horizontal" action="<?=$_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">                                
                            <div class="col-sm-8">
                                <select class="form-control" name="fname" id="">
                                    <option value="0">Seleccionar Item</option>
                                    <?php
                                    $Datosit = "SELECT * from alm.items order by id_item ";
                                    $resul = pg_query($Datosit)or die('consulta fallida'.pg_last_error());
                                    while ($datosit=pg_fetch_array($resul,NULL)) {
                                        ?>
                                        <option value="<?php echo $datosit['id_item'];  ?>"><?php echo $datosit['descripcion'];  ?></option>
                                    <?php } ?> 
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary" >BUSCAR</button>
                        </div>
                    </form>
                </div>
                <!-- buscador Select -->

                <!-- tabla items-->
                <div class="col-sm-7">
                    <div class="table-responsive">
                        <table class="table table-bordered" >

                            <thead class="bg-primary">
                                <tr>
                                    <td>Id Item</td>
                                    <td>Descripcion</td>
                                    <td>Codigo</td>
                                    <td>Unidad</td>
                                    <td>Ubicacion</td>
                                </tr>
                            </thead>
                            <?php 
                            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                                $id = $_POST["fname"];
                                $item = "SELECT * from alm.items WHERE id_item=$id";
                                $resitem = pg_query($item)or die('consulta fallida'.pg_last_error());
                                $record=pg_fetch_array($resitem);
                                ?>

                                <tbody>
                                    <tr>
                                        <td><?php echo $id_item=$record['id_item']; ?></td>
                                        <td><?php echo $descripcion=$record['descripcion']; ?></td>
                                        <td><?php echo $codigo=$record['codigo']; ?></td>
                                        <td><?php echo $unidad=$record['unidad']; ?></td>
                                        <td><?php echo $ubicacion=$record['ubicacion']; ?></td>
                                    </tr>
                                </tbody>
                                <?php
                            }
                            ?>                    
                        </table>
                    </div>
                </div>
                <!-- fin de tabla items-->
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Concepto</th>
                                    <th>Documento</th>
                                    <th class="bg-warning">Entrada Cant.</th>
                                    <th class="bg-warning">Entrada Valor Unit.</th>
                                    <th class="bg-warning">Entrada Importe.</th>
                                    <th class="bg-success">Salida Cant.</th>
                                    <th class="bg-success">Salida Valor Unit.</th>
                                    <th class="bg-success">Salida Importe.</th>
                                    <th class="bg-info">Saldo Cant.</th>
                                    <th class="bg-info">Saldo Valor Unit.</th>
                                    <th class="bg-info">Saldo Importe.</th>
                                    <th class="bg-primary">Suma Cantidad</th>
                                </tr>
                            </thead>
                               <?php 
                                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                                $id = $_POST["fname"];
                                $kardx="SELECT * FROM alm.kardex WHERE id_item=$id";
                                $reskar=pg_query($kardx)or die('consulta fallida'.pg_last_error());
                                $recordk=pg_fetch_array($reskar);
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $recordk[2] ?></td>
                                        <td><?php echo $recordk[3] ?></td>
                                        <td><?php echo $recordk[4] ?></td>
                                        <td><?php echo $recordk[5] ?></td>
                                        <td><?php echo $recordk[6] ?></td>
                                        <td><?php echo $recordk[7] ?></td>
                                        <td><?php echo $recordk[8] ?></td>
                                        <td><?php echo $recordk[9] ?></td>
                                        <td><?php echo $recordk[10] ?></td>
                                        <td><?php echo $recordk[11] ?></td>
                                        <td><?php echo $recordk[12] ?></td>
                                        <td><?php echo $recordk[13] ?></td>
                                        <td><?php echo $recordk[14] ?></td>
                                    </tr>
                                </tbody>
                                <?php
                            }
                            ?>                      
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!--fin Panel de busqueda-->
		
	</div>



</body>
</html>
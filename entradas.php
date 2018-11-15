<?php
require_once('config/conf.php');
require_once('controlador/metodos.php');

        $selnum = "SELECT max(numero) numero FROM alm.entradas";
        $rescon = pg_query($selnum)or die('consulta fallida'.pg_last_error());
        $resnum = pg_fetch_array($rescon);
            
            $num =$resnum['numero']; 
            $num= $num +1;
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
    <script>
            
            $(function(){
                // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
                $("#adicional").on('click', function(){
                    $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
                });
             
                // Evento que selecciona la fila y la elimina 
                $(document).on("click",".eliminar",function(){
                    var parent = $(this).parents().get(0);
                    $(parent).remove();
                });
            });
        </script>
</head>
<body>
	
	<div class="container-fluid">
        <!-- inicio menu de navegacion entrada-->   
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
     <!-- fin menu de navegacion entrada-->


     <div class="container">
        <!-- Titulo entrada -->
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                <h1>Comprobante de Entradas</h1>
            </div>
        </div>
        <!--Fin Titulo entrada -->

        <!-- Formulario dinamico entrada -->
        <hr>
        <div class="row">
            <div class="col-sm-12">

                <form class="form-horizontal" method="post">

                    <!-- cabecera entrada -->
                    <div class="form-group">
                        <label for="" class="control-label col-sm-2">N°:</label>
                        <div class="col-sm-2">
                        <label for="" class="control-label col-sm-2" id="num">0000<?php echo $num;?></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-sm-2" >Fecha :</label>
                        <div class="col-sm-2">
                        <label for="" class="control-label col-sm-2" id="fecha"><?php echo date("d/m/y"); ?></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-sm-2">Ingresante :</label>
                        <div class="col-sm-2">
                        <select class="form-control" name="fname" id="">
                            <option value="0">Elegir Nombre</option>
                            <?php
                            $Datosit = "SELECT * from alm.usuarios order by id_usuarios ";
                            $resul = pg_query($Datosit)or die('consulta fallida'.pg_last_error());
                            while ($datosit=pg_fetch_array($resul,NULL)) {
                                ?>
                                <option value="<?php echo $datosit['id_usuarios'];  ?>"><?php echo $datosit['nombres'];  ?></option>
                            <?php } ?> 
                        </select>
                        </div>
                    </div><br><br>
                    <!-- Fin cabecera entrada -->

                    <!-- tabla dinamica entrada -->
                    <div class="container">
                        <div class="table-responsive">
                            <table class="table table-hover" id="tabla">
                                <thead>
                                    <tr class="bg-basic">
                                        <th class="col-sm-2">CODIGO</th>
                                        <th>CONCEPTO</th>
                                        <th>DESCRIPCION</th>
                                        <th>UNIDAD</th>
                                        <th>CANTIDAD</th>
                                        <th>VALOR UNIT.</th>
                                        <th class="col-sm-1">IMPORTE</th>
                                        <th>ELIMINAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="fila-fija bg-info">
                                        <!-- <td>
                                            <div>
                                            <select class="form-control" name="fname" id="">
                                                <option value="0">Cod.</option>
                                                <?php
                                                $Datosit = "SELECT * from alm.items order by id_item ";
                                                $resul = pg_query($Datosit)or die('consulta fallida'.pg_last_error());
                                                while ($datosit=pg_fetch_array($resul,NULL)) {
                                                    ?>
                                                    <option value="<?php echo $datosit['id_item'];  ?>"><?php echo $datosit['codigo'];  ?></option>
                                                <?php } ?> 
                                            </select>
                                            </div>
                                        </td> -->
                                        <td><input type="text" class="form-control" placeholder=" codigo" name="nombre[]"></td>
                                        <td><input type="text" class="form-control" placeholder=" concepto" name="nombre[]"></td>
                                        <td><input type="text" class="form-control" placeholder=" descripcion" name="carrera[]"></td>
                                        <td><input type="text" class="form-control" placeholder=" unidad" name="grupo[]"></td>
                                        <td><input type="text" class="form-control" placeholder=" cantidad" name="grupo[]"></td>
                                        <td><input type="text" class="form-control" placeholder=" val_unit" name="grupo[]"></td>
                                        <td><input type="text" class="form-control" placeholder=" importe" name="grupo[]"></td>
                                        <td class="eliminar"><button class="btn btn-danger glyphicon glyphicon-trash"></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- tabla dinamica entrada -->

                    <!-- Botones entrada -->
                        <button type="submit" name="insertar" class="btn btn-success glyphicon-floppy-saved">Guardar</button>
                        <button id="adicional" name="adicional" type="button" class="btn btn-warning glyphicon">Más +</button><br>
                        <br>
                        <br>
                    <!-- Fin de Botones entrada -->
                </form>

                

            </div>
        </div>
        <!-- Fin de Formulario dinamico entrada-->

</div>

</body>
</html>
<!-- de la tabla de entradas anterior-->
<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-hover" >
                <thead>
                    <tr>
                        <th class="col-sm-1">CODIGO</th>
                        <th>CONCEPTO</th>
                        <th>DESCRIPCION</th>
                        <th>UNIDAD</th>
                        <th>CANTIDAD</th>
                        <th>Valor Unit.</th>
                        <th>Importe.</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><div>
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
                        </div></td>
                        <td>YAYAYA</td>
                        <td>ok</td>
                        <td>yayya</td>
                        <td>yayya</td>
                        <td>yayya</td>
                        <td>yayya</td>
                    </tr>
                </tbody>


            </table>
        </div>
    </div>
</div>
<!-- Fin de la tabla de entradas -->

<!-- otrooossss -->
<?php

                //////////////////////// PRESIONAR EL BOTÓN //////////////////////////
                if(isset($_POST['insertar']))

                {


                $items1 = ($_POST['idalumno']);
                $items2 = ($_POST['nombre']);
                $items3 = ($_POST['carrera']);
                $items4 = ($_POST['grupo']);
                 
                ///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 4 ARRAYS UNO POR CADA INPUT (ID, NOMBRE, CARRERA Y GRUPO////////////////////)
                while(true) {

                    //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
                    $item1 = current($items1);
                    $item2 = current($items2);
                    $item3 = current($items3);
                    $item4 = current($items4);
                    
                    ////// ASIGNARLOS A VARIABLES ///////////////////
                    $id=(( $item1 !== false) ? $item1 : ", &nbsp;");
                    $nom=(( $item2 !== false) ? $item2 : ", &nbsp;");
                    $carr=(( $item3 !== false) ? $item3 : ", &nbsp;");
                    $gru=(( $item4 !== false) ? $item4 : ", &nbsp;");

                    //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
                    $valores='('.$id.',"'.$nom.'","'.$carr.'","'.$gru.'"),';

                    //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
                    $valoresQ= substr($valores, 0, -1);
                    
                    ///////// QUERY DE INSERCIÓN ////////////////////////////
                    $sql = "INSERT INTO alumnos (id_alumno, nombre, carrera, grupo) 
                    VALUES $valoresQ";

                    
                    $sqlRes=$conexion->query($sql) or mysql_error();

                    
                    // Up! Next Value
                    $item1 = next( $items1 );
                    $item2 = next( $items2 );
                    $item3 = next( $items3 );
                    $item4 = next( $items4 );
                    
                    // Check terminator
                    if($item1 === false && $item2 === false && $item3 === false && $item4 === false) break;
    
                }
        
                }

            ?>
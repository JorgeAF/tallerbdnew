
<div class="modal fade" id="nuevomodal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
                <h3 class="modal-title"><strong>NUEVO ITEM</strong></h3>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" action="./include/nuevoitem.php" method="POST">
                    <fieldset>
                        <legend>Detalles del Item</legend>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="codigo">Codigo:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="codigo" placeholder="Introduce tu Codigo" name="codigo" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="descripcion">Descripcion:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="descripcion" placeholder="Introduce tu descripcion" name="descripcion" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="cantidad">Cantidad:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="cantidad" placeholder="Introduce tu cantidad" name="cantidad">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="unidad">Unidad:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="unidad" placeholder="Introduce tu unidad" name="unidad">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="ubicacion">Ubicacion:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="ubicacion" placeholder="Introduce tu ubicacion" name="ubicacion">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="partida">Partida Presupuestaria:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="partida" placeholder="Introduce tu partida" name="partida">
                            </div>
                        </div>

                    </fieldset>
                    <div class="form-group">        
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" name="submit" class="btn btn-default" >Grabar</button>
                            <button type="reset" class="btn btn-default">Cancelar</button>
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
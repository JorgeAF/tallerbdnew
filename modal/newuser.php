
<div class="modal fade" id="nuevoUsuario" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
                <h3 class="modal-title"><strong>NUEVO USUARIO</strong></h3>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" action="../include/nuevouser.php" method="POST">
                    <fieldset>
                        <legend>Detalles del Usuario</legend>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="usuario">Usuario:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="usuario" placeholder="Introduce tu usuario" name="usuario">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="clave">Clave:</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="clave" placeholder="Introduce tu clave" name="clave">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="nombre">Nombres:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre" name="nombre">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="paterno">Paterno:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="paterno" placeholder="Introduce tu paterno" name="paterno">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Materno">Materno:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="materno" placeholder="Introduce tu Materno" name="materno">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="observacion">Observacion:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="observacion" placeholder="Introduce tu observacion" name="observacion">
                            </div>
                        </div>

                      <div class="form-group">
                          <div class="col-sm-offset-4 col-sm-7">
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Usuario activo?
                                </label>
                            </div>
                        </div>
                      </div>

                    </fieldset>
                    <div class="form-group">        
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" name="submit" class="btn btn-primary" >Grabar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
      
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Noticias</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
              <div class="form-group">
                <div class="col-md-3 col-sm-12" style="margin-bottom: 20px;">
                  <label for="inputNombre">Fecha:</label>
                  <div class="input-group">  
                    <input class="form-control" type="text" id="inputNombre">
                    <span class="input-group-btn">
                      <button class="btn btn-warning" disabled id="btnBuscarNoticiar" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 pull-right">
                  <button class="btn btn-success" id="btnNuevoSocio" data-toggle="modal" data-target="#exampleModal">Nuevo</button> 
                  <button class="btn btn-warning" disabled id="btnEditarSocio">Editar</button> 
                  <button class="btn btn-danger" id="btnEliminarSocio">Eliminar</button> 
                  <button class="btn btn-success" id="btnCambiarStatusSocio" disabled>Activar</button> 
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12">
          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Título</th>
                  <th>Creado</th>
                  <th>Modificado</th>
                </tr>
                </thead>
                <tbody>
              <?php
                include_once('control.php');
                $all_nominados = $controller->get_all_nominados();
                if (!empty($all_nominados)) {
                  $cont = 1;
                  foreach ($all_nominados as $key => $nom) { ?>
                    <tr>
                      <td><?php echo $nom['id']; ?></td>
                      <td><?php echo $cont++; ?></td>
                      <td><?php echo $nom['nombre']; ?></td>
                      <td><?php echo $nom['categoria']; ?></td>
                    </tr>
                 <?php }
                  # code...
                }
                ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        


        
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
              </form>
            </div>
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>


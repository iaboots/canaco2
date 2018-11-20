
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Resultado de las Votaciones</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                 <!-- <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                </div>
                

              </div><!-- fin del box body -->
           

              <div class="box-footer">
              <!--  <button type="submit" class="btn btn-primary">Submit</button>-->
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div><!-- fin del col -->
      </div><!-- fin del row -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          
            <!-- /.box-header -->
            <div class="box-body">

              <table id="tableResultados" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>No</th>
                  <th>Nombre</th>
                  <th>Categoría</th>
                  <th>Votos</th>
                  <th>Estatus</th>
                </tr>
                </thead>
                <tbody>
              <?php
                include_once('core/control.php');
                $all_nominados = $controller->get_all_nominados();
                if (!empty($all_nominados)) {
                  $cont = 1;
                  foreach ($all_nominados as $key => $nom) { ?>
                    <tr>
                      <td><?php echo $nom['id']; ?></td>
                      <td><?php echo $cont++; ?></td>
                      <td><?php echo $nom['nombre']; ?></td>
                      <td><?php echo $nom['categoria']; ?></td>
                      <td><?php echo $nom['votos']; ?></td>
                      <td class="text-center fila-status">
                        <?php 
                            if ($nom['status'] == 1){
                              echo 'Activado';
                            } else {
                              echo 'Desactivado';
                            }
                        ?>
                      </td>
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

      </div>
      <!-- /.row -->
    <!-- /.content -->
  </div>
    </section>

  <!-- jQuery 3 syntact -->
<script type="text/javascript">
  $(document).ready(function(){

    var table = $('#tableResultados').DataTable({
      "columnDefs": [
        {
          "targets": [ 0 ],
          "visible": false,
          "searchable": false
        },
      ],
      language: {
          url: 'localisation/Spanish.json'
      }
      
    });

  
  })
</script>
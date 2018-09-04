
    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Socios / Nominados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
              <div class="form-group">
                <div class="col-xs-3">
                  <label for="inputNombre">Nombre:</label>
                  <input class="form-control" type="text" id="inputNombre" placeholder="Nombre">
                </div>
                <div class="col-xs-4 pull-right">
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
                  <th>ID</th>
                  <th>No</th>
                  <th>Nombre</th>
                  <th>Categoría</th>
                  <th>Email</th>
                  <th>RFC</th>
                  <th>Estatus</th>
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
                      <td><?php echo $nom['email']; ?></td>
                      <td><?php echo $nom['rfc']; ?></td>
                      <td><?php echo $nom['status']; ?></td>
                      <td><?php echo $nom['creado']; ?></td>
                      <td><?php echo $nom['modificado']; ?></td>
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
    </section>
    <!-- /.content -->
  </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Socios/Nominados</h4>
      </div>
      <div class="modal-body">
        <form id="formNuevoSocio">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="recipient-name" name="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-categoria" class="control-label">Categoría:</label>
            <input type="text" class="form-control" id="recipient-categoria" name="recipient-categoria">
          </div>
          <div class="form-group">
            <label for="recipient-email" class="control-label">Email:</label>
            <input type="email" class="form-control" id="recipient-email" name="recipient-email">
          </div>
          <div class="form-group">
            <label for="recipient-rfc" class="control-label">Rfc:</label>
            <input type="text" class="form-control" id="recipient-rfc" name="recipient-rfc">
          </div>
          <div class="form-group">
            <label for="recipient-status" class="control-label">Estatus:</label>
            <input type="text" class="form-control" id="recipient-status" name="recipient-status"></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarSocio">Guardar</button>
        <div class="text-left" style="display: none;">
          <hr>
          <label>Datos de Control:</label><br>
          <label>Creación: {Fecha-Hora} por {usuario}</label><br>
          <label>Última Modif: {Fecha-Hora} por {usuario}</label>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery 3 -->

<script type="text/javascript">
  $(document).ready(function(){
   var table = $('#example2').DataTable({
    "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
        ]
   });

   function desactivar_botones_edicion(){
      $('#btnEditarSocio').prop('disabled', true);
      $('#btnCambiarStatusSocio').prop('disabled', true);
      $('#btnEliminarSocio').prop('disabled', true);
   }

   $('#exampleModal').on('hide.bs.modal', function (event) {
      var modal = $('#exampleModal');
      modal.find('.modal-body #recipient-name').val('');
      modal.find('.modal-body #recipient-categoria').val('');
      modal.find('.modal-body #recipient-email').val('');
      modal.find('.modal-body #recipient-rfc').val('');
      modal.find('.modal-body #recipient-status').val('');
      modal.find('.modal-footer .text-left').css('display', 'none')
   });

     $('#example2 tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            desactivar_botones_edicion();
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#btnEditarSocio').prop('disabled', false);
            $('#btnCambiarStatusSocio').prop('disabled', false);
            $('#btnEliminarSocio').prop('disabled', false);
        }
       } );


    $('button#btnNuevoSocio').on('click', function(e){
       // alert('asdas');
    });

    $('button#btnEditarSocio').on('click', function(e){
        var modal = $('#exampleModal');
        modal.find('.modal-footer .text-left').css('display', 'inline')

        var editable_nombre = table.row('.selected').data()[2];
        var editable_categoria = table.row('.selected').data()[3];
        var editable_email = table.row('.selected').data()[4];
        var editable_rfc = table.row('.selected').data()[5];
        var editable_estatus = table.row('.selected').data()[6];

        modal.find('.modal-body #recipient-name').val(editable_nombre);
        modal.find('.modal-body #recipient-categoria').val(editable_categoria);
        modal.find('.modal-body #recipient-email').val(editable_email);
        modal.find('.modal-body #recipient-rfc').val(editable_rfc);
        modal.find('.modal-body #recipient-status').val(editable_estatus);
        
        modal.modal('show');
    });

    $('button#btnEliminarSocio').on('click', function(e){
      var r = confirm("Confirmar para eliminar");
      if (r == true) {
        // rutina ajax para eliminar al socio
            desactivar_botones_edicion();

            var id = table.row('.selected').data()[0];

            var url = 'eliminar_socio.php';
            data = {'id': id}

            $.post(url, data, function(data){

              if (data == 'ok'){
                alert('Eliminado')
              } else {
                alert('error al eliminar');
              }

            })

            table.row('.selected').remove().draw( false );
            toastr.success('<strong>Eliminado:</strong> Se ha eliminado este socio.');
      } 
    });

    $('button#btnGuardarSocio').on('click', function(e){
      var form = $('#formNuevoSocio');

      url = 'create_socio.php';

      var data = form.serialize();

      $.post(url, data, function(data){
        if (data == "ok"){
           toastr.success('<strong>Creado:</strong> Hemos creado un nuevo socio.');
          
        } else {
           toastr.error('<strong>Error:</strong> Un error ha impedido crear un nuevo socio.');
        }
      }).fail(function(){
        alert('error');
      });

      $('div#exampleModal').modal('hide');
    })


  })
</script>

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
                <div class="col-sm-12 text-right">
                  <button class="btn btn-success" id="btnNuevoSocio" data-toggle="modal" data-target="#exampleModal">Nuevo</button> 
                  <button class="btn btn-info" disabled id="btnEditarSocio">Editar</button> 
                  <button id="btnEliminarSocio" class="btn btn-danger" disabled>Eliminar</button> 
                  <button id="btnCambiarStatusSocio" class="btn btn-warning" disabled data-activate-accion="activar">Activar</button> 
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
                      <td><?php echo $nom['email']; ?></td>
                      <td><?php echo $nom['rfc']; ?></td>
                      <td class="text-center fila-status">
                        <?php
                            if ($nom['status'] == "1"){
                              echo 'Activado';
                            } else {
                              echo 'Desactivado';
                            }
                        ?>
                      </td>
                      <td>
                        <?php 
                          $fecha = $nom['creado'];
                          $newDate = DateTime::createFromFormat('Y-m-d H:i:s', $fecha);
                          $newDateString = $newDate->format('d/m/Y');	
                          echo $newDateString; 
                        ?>
                      <td>
                        <?php 
                          $fecha = $nom['modificado'];
                          $newDate = DateTime::createFromFormat('Y-m-d H:i:s', $fecha);
                          $newDateString = $newDate->format('d/m/Y');	
                          echo $newDateString; 
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
    </section>
    <!-- /.content -->
  </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-role="default">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Socios/Nominados</h4>
      </div>
      <div class="modal-body">
        <form id="formNuevoSocio">
          <input type="hidden" value="HOLAHOLA" id="inputHiddenId" name="inputHiddenId">
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
          <div class="form-group" id="group-status">
            <label for="recipient-status" class="control-label">Estatus:</label>
           <!-- <input type="text" class="form-control" >   -->
            <select class="form-control" id="recipient-status" name="recipient-status">
              <option value="Activado" selected="selected">Activado</option>
              <option value="Desactivado">Desactivado</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarSocio">Guardar</button>
        <div class="text-left" style="display: none;">
          <hr>
          <label>Datos de Control:</label><br>
          <label>Creación: <label id="modal-created"></label> por {usuario}</label><br>
          <label>Última Modif: <label id="modal-modified"></label> por {usuario}</label>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery 3 syntact -->
<script type="text/javascript">
  $(document).ready(function(){

    const role_default       = 'default';
    const role_new_nominado  = 'new_nominado';
    const role_edit_nominado = 'edit_nominado';

    $("#exampleModal").data("role", role_default);

    var table = $('#example2').DataTable({
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

    function desactivar_botones_edicion(){
      $('#btnEditarSocio').prop('disabled', true);
      $('#btnCambiarStatusSocio').prop('disabled', true);
      $('#btnEliminarSocio').prop('disabled', true);
    }

    function crear_nominado(){
      let form = $('#formNuevoSocio');
      let url = 'core/create_socio.php';
      let data = form.serialize();

      $.post(url, data, function(response){
        if (response == "ok"){
          toastr.success('<strong>Creado:</strong> Has creado un nuevo nominado.');
          $('#liCargarNominados').click();
        } else {
          toastr.error('<strong>Error:</strong> Un error ha impedido crear un nuevo socio.' + response);
        }
      }).fail(function(){
        alert('error');
      });
    }

    function editar_nominado(){
      let form = $('#formNuevoSocio');
      let url = 'core/editar_socio.php';
      let data = form.serialize();

      $.post(url, data, function(response){
        if (response == "ok"){
          toastr.success('<strong>Cambiado:</strong> Has editado a un nominado.');
          $('#liCargarNominados').click();
        } else if (response == "sincambios"){
          toastr.info('<strong>Sin cambios:</strong> No hiciste cambios en el nominado.');
        } 
        else {
          toastr.warning('<strong>Error:</strong> Un error ha impedido editar al nominado.');
        }
      }).fail(function(){
        toastr.error('<strong>Error:</strong> Un error ha impedido editar al nominado.' + response);
      });
    }

    function cambiar_estado_btn_activar(cell_status){
      if (cell_status == 'Desactivado'){
          $( '#btnCambiarStatusSocio' ).html("Activar");
          $( '#btnCambiarStatusSocio' ).data("activate-accion", 'activar');
        } else {
          $( '#btnCambiarStatusSocio' ).html("Desactivar");
          $( '#btnCambiarStatusSocio' ).data("activate-accion", 'desactivar');
        }
    }

    $('#exampleModal').on('hide.bs.modal', function (event) {
      let modal = $('#exampleModal');
      modal.find('.modal-body #recipient-rfc').val('');
      modal.find('.modal-body #recipient-name').val('');
      modal.find('.modal-body #recipient-email').val('');
      modal.find('.modal-body #recipient-status').prop('selectedIndex',0);
      
      modal.find('.modal-body #recipient-categoria').val('');
      modal.find('.modal-footer .text-left').css('display', 'none')
      
      // muestro el div status 
      modal.find('.modal-body #group-status').css('display', 'inline');
    });

    $('#example2 tbody').on( 'click', 'tr', function () {
      if ( $( this ).hasClass( 'selected' ) ) {
        // Desactivar fila
        $( this ).removeClass( 'selected' );
        desactivar_botones_edicion();
      } else {
        // Activar fila
        table.$( 'tr.selected' ).removeClass( 'selected' );
        $( this ).addClass( 'selected' );
        $( '#btnEditarSocio' ).prop( 'disabled', false );
        $( '#btnEliminarSocio' ).prop( 'disabled', false );

        let cell_status = table.row('.selected').data()[6]
        $( '#btnCambiarStatusSocio' ).prop( 'disabled', false );
        cambiar_estado_btn_activar(cell_status);
      }
    });

    $( 'button#btnNuevoSocio' ).on( 'click', function(e){
      $( "#exampleModal" ).data("role", role_new_nominado);
    });

    $('#btnCambiarStatusSocio').on( 'click', function( e ){
      let id = table.row('.selected').data()[0];
      let url = 'core/activar_socio.php';
      let accion =  $( '#btnCambiarStatusSocio' ).data("activate-accion");
      let response_accion = '';
      if (accion == 'activar'){
        response_accion = 'activado';
      } else {
        response_accion = 'desactivado';
      }

      let data = {
        'user_id': id,
        'accion': accion
      }
      
      //table.row('.selected').data()[6]  = "ahahahah";
      //let cell_status = table.row('.selected').data()[6] ; // .draw( false );
      //alert(cell_status);
      //table.row('.selected').draw('true');

      $.post( url, data, function(response){
        if (response.resp == 'ok'){
          toastr.success('Se ha ' + response_accion + ' el usuario');
          let value = table.row('.selected').data();
          
          if (response_accion == 'activado'){
            value[6] = 'Activado';
            table.row('.selected').data(value);
            cambiar_estado_btn_activar('Activado');
          } else {
            value[6] = 'Desactivado';
            table.row('.selected').data(value);
            cambiar_estado_btn_activar('Desactivado');
          }
        } else {
          toastr.warning('No se activado el socio por el siguiente error ' + response.msj);
        }

      }).fail( function(){
        toastr.error( "Ha ocurrido un error no se puede activar el socio" );
      })
    });

    $('button#btnEditarSocio').on('click', function(e){
      // Clic en boton superior antes de abrir la modal para hacer los cambios
      let modal = $('#exampleModal');
      modal.data('role', role_edit_nominado); 

      modal.find('.modal-footer .text-left').css('display', 'inline');
      
      // oculto el div status 
      modal.find('.modal-body #group-status').css('display', 'none');

      
      let socio_id = table.row('.selected').data()[0];
      let editable_nombre = table.row('.selected').data()[2];
      let editable_categoria = table.row('.selected').data()[3];
      let editable_email = table.row('.selected').data()[4];
      let editable_rfc = table.row('.selected').data()[5];
      let editable_estatus = table.row('.selected').data()[6];
      let date_created = table.row('.selected').data()[7];
      let date_modified = table.row('.selected').data()[8];
      
      $("#inputHiddenId").val(socio_id);
      modal.find('.modal-body #recipient-name').val(editable_nombre);
      modal.find('.modal-body #recipient-categoria').val(editable_categoria);
      modal.find('.modal-body #recipient-email').val(editable_email);
      modal.find('.modal-body #recipient-rfc').val(editable_rfc);
      modal.find('.modal-body #recipient-status').val(editable_estatus);
      modal.find('.modal-footer #modal-created').text(date_created);
      modal.find('.modal-footer #modal-modified').text(date_modified);
      
      modal.modal('show');
    });

    $('button#btnEliminarSocio').on('click', function(e){
      let r = confirm("Confirmar para eliminar");
      if (r == true) {
        // rutina ajax para eliminar al socio
        desactivar_botones_edicion();

        var id = table.row('.selected').data()[0];
        var url = 'core/eliminar_socio.php';

        var data = {
          'id': id,
        };

        $.post(url, data, function(resp){
            if (resp == 'ok'){
                table.row('.selected').remove().draw( false );
                toastr.success('<strong>Eliminado:</strong> Se ha eliminado este socio.');
                console.log(resp);
            } else {
                toastr.warning('<strong>No se pudo:</strong> No se ha eliminado este socio.');
                console.log(resp);
            }

        })
        
      } 
    });

    $('button#btnGuardarSocio').on('click', function(e){
      let modal = $('#exampleModal');
      let modal_role = modal.data("role");
   
      if (modal_role == role_new_nominado){
        crear_nominado();
      } else if (modal_role == role_edit_nominado){
        editar_nominado();
      } else {
        alert('el rol no se encuentra ' + modal_role);
      }

      modal.data("role", role_default);
      $('div#exampleModal').modal('hide');
      
    })

  })
</script>
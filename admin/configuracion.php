
    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Imagen inicial</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <!-- form start -->
                
                <!-- lista -->
                <div class="col-xs-12">
                <div class="col-md-4 col-sm-12 pull-right">
                  <button class="btn btn-success" id="btnNuevoImagen" data-toggle="modal" data-target="#crearImagenModal">Nuevo</button> 
                  <button class="btn btn-warning" disabled id="btnEditarImagen">Editar</button> 
                  <button id="btnEliminarImagen" class="btn btn-danger" disabled>Eliminar</button> 
                </div>
                <h3>Listado de Imagenes</h3>
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>No</th>
                  <th>Titulo</th>
                  <th>Enlace</th>
                  <th>Fecha Límite</th>
                </tr>
                </thead>
                <tbody>
              <?php
                include_once('core/control.php');
                $all_images = $controller->get_all_images();
                if (!empty($all_images)) {
                  $cont = 1;
                  foreach ($all_images as $key => $nom) { ?>
                    <tr>
                      <td><?php echo $nom['id']; ?></td>
                      <td><?php echo $cont++; ?></td>
                      <td><?php echo $nom['titulo']; ?></td>
                      <td><?php echo $nom['liga']; ?></td>
                      <td><?php echo $nom['fecha_limite']; ?></td>
                    </tr>
                 <?php }
                  # code...
                }
                ?>
                </tfoot>
              </table>
                </div>
                <!-- fin de la lista -->

              <div class="box-footer">
                
              </div>
            </div>
          </div>
          <!-- /.col -->

      </div>
      <!-- /.row -->




      <div class="row">

<!-- left column -->
<div class="col-md-12">
          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">+ Noticias</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Ruta folder imágenes</span>
                    </div>
                    <div class="col-xs-6">
                      <input type="text" class="form-control" id="exampleInputFile">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Días a mostrar</span>
                    </div>
                    <div class="col-xs-2">
                      <input type="number" class="form-control" id="exampleInputFile">
                    </div>
                    <div class="col-xs-4"></div>
                  </div>
                </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">+ El MEJOR de MI CIUDAD</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Evento activo</span>
                    </div>
                    <div class="col-xs-6">
                      <input type="checkbox">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Año</span>
                    </div>
                    <div class="col-xs-6">
                      <input class="form-control" type="number" id="exampleInputFile">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Fecha Inicio de Votaciones</span>
                    </div>
                    <div class="col-xs-4">
                      <input class="form-control" type="text" id="inputDateIni" name="inputDateIni" placeholder="dd/mm/yyyy">
                    </div>
                    <div class="col-xs-2">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Fecha Fin de las Votaciones</span>
                    </div>
                    <div class="col-xs-4">
                      <input class="form-control" type="text" id="inputDateFin" name="inputDateFin" placeholder="dd/mm/yyyy">
                    </div>
                    <div class="col-xs-2">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Liga para votar:</span>
                    </div>
                    <div class="col-xs-6">
                      <input class="form-control" type="text" id="exampleInputFile">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Activar Página Nominados</span>
                    </div>
                    <div class="col-xs-6">
                      <input type="checkbox">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Activar Página de Resultados</span>
                    </div>
                    <div class="col-xs-6">
                      <input type="checkbox">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Imagen:</span>
                    </div>
                    <div class="col-xs-6">
                      <input class="form-control" type="file" id="exampleInputFile">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Mensaje:</span>
                    </div>
                    <div class="col-xs-6">
                      <textarea class="form-control" id="exampleInputFile" style="resize:none" rows="4"></textarea>
                    </div>
                  </div>
                </div>   
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->
          <div class="box box-warning">
            <div class="box-body">
              <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <button class="btn btn-success">Guardar</button>
                    </div>
                    <div class="col-xs-6">
                      <button class="btn btn-warning">Cancelar</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
  
<!-- inicio del modal agregar imagenes -->

<div class="modal fade" id="crearImagenModal" tabindex="-1" role="dialog" aria-labelledby="crearImagenModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="crearImagenModal">Agregar Imagen Inicio</h4>
      </div>
      <div class="modal-body">
        <form id="formNuevaImagen"  name="formNuevaImagen" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipientTitulo" class="control-label">Título:</label>
            <input type="text" class="form-control" id="recipientTitulo" name="recipientTitulo">
          </div>
          <div class="form-group">
            <label class="control-label" for="recipientImage" >Imagen:</label>
            <input type="file" id="recipientImage" name="recipientImage" class="form-control">
          </div><!-- end col -->
          <div class="form-group">
            <label for="recipientFecha" class="control-label">Fecha Límite de Visualización:</label>
            <input type="text" class="form-control" id="recipientFecha" name="recipientFecha">
          </div>
          <div class="form-group">
            <label for="recipientLiga" class="control-label">Liga:</label>
            <input type="text" class="form-control" id="recipientLiga" name="recipientLiga">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarImagen">Guardar</button>
        <div class="text-left" style="display: none;">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- fin del modal de imagenes -->


<!-- inicio del modal editar imagenes -->

<div class="modal fade" id="editarImagenModal" tabindex="-1" role="dialog" aria-labelledby="editarImagenModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editarImagenModal">Modificar Imagen Inicio</h4>
      </div>
      <div class="modal-body">
        <form id="formEditarImagen"  enctype="multipart/form-data">
          <div class="form-group">
            <label for="editableTitulo" class="control-label">Título:</label>
            <input type="text" class="form-control" id="editableTitulo" name="editableTitulo">
          </div>
          <div class="form-group">
            <label class="control-label" for="editableImage" >Imagen:</label>
            <input type="file" id="editableImage" name="editableImage" class="form-control">
          </div><!-- end col -->
          <div class="form-group">
            <label for="editableFecha" class="control-label">Fecha Límite de Visualización:</label>
            <input type="text" class="form-control" id="editableFecha" name="editableFecha">
          </div>
          <div class="form-group">
            <label for="editableLiga" class="control-label">Liga:</label>
            <input type="text" class="form-control" id="editableLiga" name="editableLiga">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnUpdateImagen">Actualizar</button>
        <div class="text-left" style="display: none;">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- fin del modal de imagenes -->


<!-- jQuery 3 syntact -->

<script type="text/javascript">
  $(document).ready(function(){

      let date_config = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
      };
    
      $( "#recipientFecha" ).datepicker( date_config );
      $( "#editableFecha" ).datepicker( date_config );
      $( "#inputDateIni" ).datepicker( date_config );
      $( "#inputDateFin" ).datepicker( date_config );

      var table = $( '#example2' ).DataTable({
      "columnDefs": [
          {
              "targets": [ 0 ],
              "visible": false,
              "searchable": false
          },
        ]
      });
      // desactivar datos de los dos modal
      $( '#crearImagenModal' ).on( 'hide.bs.modal', function ( event ) {
        document.getElementById("formNuevaImagen").reset();
      });
      $( '#editarImagenModal' ).on( 'hide.bs.modal', function ( event ) {
        document.getElementById("formEditarImagen").reset();
      });
      // fin de desactivar datos
    

    function desactivar_botones_edicion(){
      $('#btnEditarImagen').prop('disabled', true);
      $('#btnEliminarImagen').prop('disabled', true);
    }

    function crear_imagen(){

      let url = 'core/create_imagen.php';
 
      let file = $('#recipientImage')[0].files[0];
      let titulo = $('#recipientTitulo').val();
      let fecha = $('#recipientFecha').val();
      let liga = $('#recipientLiga').val();

     let data = new FormData();
     data.append('image', file);
     data.append('titulo', titulo);
     data.append('fecha', fecha);
     data.append('liga', liga);
    // console.log(formSer);
      $.ajax({
            url: url,
            type: 'post',
            data: data,
            contentType: false,
            processData: false,
            success: function(response){
              if (response == "ok"){
                toastr.success('<strong>Creado:</strong> Has creado un nueva imagen.');
                 $('#liCargarConfig').click(); // mando a refrescar la pagina
              } else if (response == "img_ext_error"){
                toastr.warning('<strong>Error:</strong> Al perecer no has subido una imagen válida.');
              } else if ( response == "img_serv_error"){
                toastr.warning('<strong>Error:</strong> Un error impidió subir la imagen.');
              }
              else {
                toastr.warning('<strong>Error:</strong> Un error ha impedido crear una nueva imagen.' + response);
              }
            },
            fail: function(){
              toastr.error('<strong>Error:</strong> Un error ha impedido crear una nueva imagen.' + response);
            }, 
        });
    }

    $("#btnGuardarImagen").on("click", ( e ) => {
      e.preventDefault();
      crear_imagen();
    });

    $('button#btnEliminarImagen').on('click', ( e ) => {
      let r = confirm("Confirmar para eliminar");
      if (r == true) {
        // eliminamos la imagen
        desactivar_botones_edicion();

        var id = table.row('.selected').data()[0];
        var url = 'core/eliminar_imagen.php';

        var data = {
          'id': id,
        };

        $.post(url, data, (resp) => {
            if (resp == 'ok'){
                table.row('.selected').remove().draw( false );
                toastr.success('<strong>Eliminado:</strong> Se ha eliminado esta imagen.');
                console.log(resp);
            } else {
                toastr.warning('<strong>No se pudo:</strong> No se ha eliminado esta imagen.');
                console.log(resp);
            }

        })
        
      } 
    });

    $("#btnEditarImagen").on("click", ()=>{
      let modal = $("#editarImagenModal");

      let titulo = table.row('.selected').data()[2];
      let liga = table.row('.selected').data()[3];
      let fecha_limite = table.row('.selected').data()[4];

      modal.find('.modal-body #editableTitulo').val(titulo);
      //modal.find('.modal-body #recipientImage').val('');
      modal.find('.modal-body #editableFecha').val(fecha_limite);
      modal.find('.modal-body #editableLiga').val(liga);
      
      modal.modal('show');
    })

    $('#example2 tbody').on( 'click', 'tr', () => {
      if ( $( this ).hasClass( 'selected' ) ) {
        // Desactivar fila
        $( this ).removeClass( 'selected' );
        desactivar_botones_edicion();
      } else {
        // Activar fila
        table.$( 'tr.selected' ).removeClass( 'selected' );
        $( this ).addClass( 'selected' );
        $( '#btnEditarImagen' ).prop( 'disabled', false );
        $( '#btnEliminarImagen' ).prop( 'disabled', false );
      }
    });

    $('button#btnGuardarImagen').on('click', (e) => {
      let modal = $('#crearImagenModal');
      $('div#crearImagenModal').modal('hide');
    });
    
    $('button#btnUpdateImagen').on('click', (e) => {
      let modal = $('#crearImagenModal');
      $('div#crearImagenModal').modal('hide');
    });

  })
</script>
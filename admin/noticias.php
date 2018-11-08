
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
                <div class="col-md-6 col-sm-12 pull-right">
                  <button class="btn btn-success" id="liCargarNoticiasNew">Nueva Noticia</button> 
                  <button class="btn btn-warning" disabled id="btnEditarNoticia">Editar</button> 
                  <button class="btn btn-danger" id="btnEliminarNoticia">Eliminar</button> 
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
                  <th>id</th>
                  <th>No</th>
                  <th>Título</th>
                  <th>Creado</th>
                  <th>Modificado</th>
                </tr>
                </thead>
                <tbody>
              <?php
                include_once('core/control.php');
                $all_noticias = $controller->get_all_noticias();
                if (!empty($all_noticias)) {
                  $cont = 1;
                  foreach ($all_noticias as $key => $nom) { ?>
                    <tr>
                      <td><?php echo $nom['id']; ?></td>
                      <td><?php echo $cont++; ?></td>
                      <td><?php echo $nom['titulo']; ?></td>
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
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

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
      $('#btnEditarNoticia').prop('disabled', true);
      $('#btnEliminarNoticia').prop('disabled', true);
    }

    $('#example2 tbody').on( 'click', 'tr', function () {
      if ( $( this ).hasClass( 'selected' ) ) {
        // Desactivar fila
        $( this ).removeClass( 'selected' );
        desactivar_botones_edicion();
      } else {
        // Activar fila
        table.$( 'tr.selected' ).removeClass( 'selected' );
        $( this ).addClass( 'selected' );
        $( '#btnEditarNoticia' ).prop( 'disabled', false );
        $( '#btnEliminarNoticia' ).prop( 'disabled', false );

        let cell_status = table.row('.selected').data()[6]
        //cambiar_estado_btn_activar(cell_status);
      }
    });

    // funciones para post info al server

    // Eventos de los botones
    $('#liCargarNoticiasNew').on('click', function( e ){
      $("#contenido").load("noticias_new.php");
    });

    $( 'button#btnEditarNoticia' ).on("click", ( e ) => {
      let id = table.row('.selected').data()[0];
      $("#contenido").load("noticias_edited.php", {'noticiaID': id});
    })

    $('button#btnEliminarNoticia').on('click', function(e){
      let r = confirm("Confirmar para eliminar");
      if (r == true) {
        // rutina ajax para eliminar al socio
        desactivar_botones_edicion();

        let id = table.row('.selected').data()[0];
        let url = 'core/eliminar_noticia.php';

        let data = {
          'id': id,
        };

        $.post(url, data, (resp) => {
            if (resp == 'ok'){
                table.row('.selected').remove().draw( false );
                toastr.success('<strong>Eliminado:</strong> Se ha eliminado esta noticia.');
                console.log(resp);
            } else {
                toastr.warning('<strong>No se pudo:</strong> No se ha eliminado esta noticia.');
                console.log(resp);
            }

        }).fail(()=>{
          toastr.error("No se pudo eliminar la noticia.");
        });
        
      } 
    });

    // Inicialización
    desactivar_botones_edicion();
    

  });
    
</script>

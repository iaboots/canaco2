
    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">+ Imagen inicial</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <!-- form start -->
                
                <!-- lista -->
                  <div class="col-sm-12 text-right" style="padding-bottom: 20px;">
                    <button class="btn btn-success" id="btnNuevoImagen" data-toggle="modal" data-target="#crearImagenModal">Nuevo</button> 
                    <button class="btn btn-warning" disabled id="btnEditarImagen">Editar</button> 
                    <button id="btnEliminarImagen" class="btn btn-danger" disabled>Eliminar</button> 
                  </div>
                
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>No</th>
                  <th>Titulo</th>
                  <th>Enlace</th>
                  <th>Fecha Límite</th>
                  <th>Ruta</th>
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
                      <td><?php 
                                $fecha = $nom['fecha_limite'];
                                $newDate = DateTime::createFromFormat('Y-m-d', $fecha);
                                $newDateString = $newDate->format('d/m/Y');	
                                echo $newDateString; 
                          ?></td>
                      <td><?php echo $nom['ruta']; ?></td>
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
            <?php
              $votacion_data = $controller->get_votacion();
              
            ?>
            <div class="box-body">
              <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Evento activo</span>
                    </div>
                    <div class="col-xs-6">
                      <input type="checkbox" 
                             id="checkboxActivo"
                        <?php
                          if ($votacion_data["activo"] == 1){
                            echo "checked"; 
                          };
                        ?>
                      >
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Año</span>
                    </div>
                    <div class="col-xs-6">
                      <input class="form-control" type="number" id="inputYear" value="<?php echo $votacion_data['year']; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Fecha Inicio de Votaciones</span>
                    </div>
                    <div class="col-xs-4">
                      <input class="form-control" type="text" id="inputDateIni" 
                              value="<?php
                                        $fecha_ini = $votacion_data['date_ini'];
                                        $iniDate = DateTime::createFromFormat('Y-m-d', $fecha_ini);
                                        $iniDateString = $iniDate->format('d/m/Y');	
                                        echo $iniDateString;
                                      ?>"
                              name="inputDateIni" placeholder="dd/mm/yyyy">
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
                      <input class="form-control" type="text" id="inputDateFin" 
                              value="<?php
                                           $fecha_fin = $votacion_data['date_fin'];
                                           $finDate = DateTime::createFromFormat('Y-m-d', $fecha_fin);
                                           $finDateString = $finDate->format('d/m/Y');	
                                           echo $finDateString;
                                     ?>"
                              name="inputDateFin" 
                              placeholder="dd/mm/yyyy">
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
                      <input type="checkbox"
                              id="checkboxPageNominados"
                      <?php
                      
                          if ($votacion_data["ver_page_nomin"] == 1){
                            echo "checked"; 
                          };
                      ?>
                      ><!-- fin del input checkbox -->
                   
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <span>Activar Página de Resultados</span>
                    </div>
                    <div class="col-xs-6">
                      <input type="checkbox"
                             id="checkboxResultados"
                      <?php
                      
                          if ($votacion_data["ver_page_result"] == 1){
                            echo "checked"; 
                          };
                      ?>
                      >
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
                      <textarea class="form-control" id="inputMensaje" style="resize:none" rows="4"><?php echo $votacion_data["mensaje"]; ?></textarea>
                    </div>
                  </div>
                </div>   
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 text-right">
                      <button class="btn btn-danger">Cancelar</button>
                    </div>
                    <div class="col-xs-6">
                      <button class="btn btn-info" id="btnGuardarMejor" >Guardar</button>
                    </div>
                  </div>
                </div>
            </div>
            
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
            <div class="text-center" id="contenedorNewImage" style="display: none;">
              <br>
              <br>
              <img src="../img/loading.gif" data-src="../img/loading.gif" id="newImagenShow" class="post-carga-nueva"  alt="Imagen a mostrar" height="60%" width="60%">
              <br>
              <br>
            </div>
            <input type="file" id="recipientImage" 
                    name="recipientImage" 
                    accept="image/png, image/jpeg, image/jpg"
                    class="form-control">
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
            <div class="text-center">
              <br>
              <br>
              <img src="../img/loading.gif" data-src="../img/loading.gif" id="editImagenShow" class="post-carga"  alt="Smiley face" height="60%" width="60%">
              <br>
              <br>
            </div>
            <input type="file" id="editableImage" name="editableImage" 
                  accept="image/png, image/jpeg, image/jpg" 
                  class="form-control" ><!--  -->
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

      // Iniciación de variables globales y recursos
      var animationName = 'animated shake';
      var animationEnd = 'MSAnimationEnd animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd';
      
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
              "targets": [ 0, 5 ],
              "visible": false,
              "searchable": false
            },
          ],
        language: {
            url: 'localisation/Spanish.json'
        }
      });


      // funciones generales

      function comprobar_formulario_nuevo(modal){
        let liga = modal.find('.modal-body #recipientLiga').val();
        let titulo = modal.find('.modal-body #recipientTitulo').val();
        let fecha_limite= modal.find('.modal-body #recipientFecha').val();
        let file = $('#recipientImage')[0].files[0];
        
        if ( liga != '' && titulo != '' && fecha_limite != '' && file != null ) {
          return true;
        }
        return false;
      }

      function comprobar_formulario_editar(modal){
        let liga = modal.find('.modal-body #editableLiga').val();
        let titulo = modal.find('.modal-body #editableTitulo').val();
        let fecha_limite= modal.find('.modal-body #editableFecha').val();
        //let file = $('#editableImage')[0].files[0];  && file != null
        
        if ( liga != '' && titulo != '' && fecha_limite != ''  ) {
          return true;
        }
        return false;
      }

      // eventos de los elementos

      // desactivar datos de los dos modal
      $( '#crearImagenModal' ).on( 'hide.bs.modal', function ( event ) {
        document.getElementById("formNuevaImagen").reset();
        // asigno nueva ruta
        $("#newImagenShow").data("src", "../img/loading.gif");

        recargar_imagen_nueva();
        $("#contenedorNewImage").css("display", "none");
      });

      $( '#editarImagenModal' ).on( 'hide.bs.modal', function ( event ) {
        // dejar en blanco el form
        document.getElementById("formEditarImagen").reset();
        $("#editImagenShow").attr("src", "../img/loading.gif");
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
    }; // fin de la función crear imagen
    
    function update_imagen(modal){
      let url = "core/editar_imagen.php";
      let id = table.row('.selected').data()[0];
      let titulo = modal.find('.modal-body #editableTitulo').val();
      let file = $('#editableImage')[0].files[0];
      let fecha_limite = modal.find('.modal-body #editableFecha').val();
      let liga = modal.find('.modal-body #editableLiga').val();      
    
      let data = new FormData();
      console.log(file);
      data.append('imageID', id);
      if (file == null){
        data.append('image', 'none');
      } else {
        data.append('image', file);
      } 
      
      data.append('titulo', titulo);
      data.append('fecha', fecha_limite);
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
                toastr.success('<strong>Creado:</strong> Has actualizado la información.');
                  $('#liCargarConfig').click(); // mando a refrescar la pagina
              } else if (response == "img_ext_error"){
                toastr.warning('<strong>Error:</strong> Al perecer no has subido una imagen válida.');
              } else if ( response == "img_serv_error"){
                toastr.warning('<strong>Error:</strong> Un error impidió actualizar la información.');
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

    function recargar_imagen(){
      $(".post-carga").each(function(){
          $(this).attr('src', $(this).data('src')).on("load", function(){
              $(this).fadeIn();
          });
        }) 
    }

    function recargar_imagen_nueva(){
      $( ".post-carga-nueva" ).each( function(){
          $( this ).attr( 'src', $( this ).data( 'src' )).on( "load", function(){
              $( this ).fadeIn();
          });
        }) 
    }


    // fin de las funciones comunes
    
    // btn en el modal para iniciar el crear imagen
    $("#btnGuardarImagen").on("click", function( e ) {
      e.preventDefault();
      let modal = $('#crearImagenModal');
      // comprobar que el modal este completo
      if ( comprobar_formulario_nuevo( modal ) ) {
        crear_imagen();
        modal.modal('hide');
      } else {
        // mostrar mensaje de error
        toastr.warning( "<strong>Cuidado: </strong> Debe llenar todos los datos");
        modal.addClass( animationName ).one( animationEnd, function () {
          $( this ).removeClass( animationName );
        });
      }
      
      
    })
    
    // btn en el modal para update la imagen
    $( 'button#btnUpdateImagen' ).on( 'click', function( e ) {
      e.preventDefault();
      let modal = $('#editarImagenModal');
      if (comprobar_formulario_editar(modal)){
        update_imagen(modal);
        modal.modal('hide');
      } else {
        toastr.warning("<strong>Cuidado: </strong> Debe llenar todos los datos");
        modal.addClass(animationName).one(animationEnd, function () {
          $(this).removeClass(animationName);
        });
      }
    })
    
    // boton sobre el listado de imagenes
    $('button#btnEliminarImagen').on('click', function( e ) {
      let r = confirm("Confirmar para eliminar");
      if (r == true) {
        // eliminamos la imagen
        desactivar_botones_edicion();

        var id = table.row('.selected').data()[0];
        var url = 'core/eliminar_imagen.php';

        var data = {
          'id': id,
        };

        $.post(url, data, function(resp) {
            if (resp == 'ok'){
                table.row('.selected').remove().draw( false );
                toastr.success('<strong>Eliminado:</strong> Se ha eliminado esta imagen.');
                console.log(resp);
            } else {
                toastr.warning('<strong>No se pudo:</strong> No se ha eliminado esta imagen.');
                console.log(resp);
            }

        });
        
      } // fin del if r == true
    });
    
    // boton sobre el listado de imagenes
    $("#btnEditarImagen").on("click", function( ) {
      let modal = $("#editarImagenModal");

      let titulo = table.row('.selected').data()[2];
      let liga = table.row('.selected').data()[3];
      let fecha_limite = table.row('.selected').data()[4];
      let imagen_src = table.row('.selected').data()[5];

      //$("#editImagenShow").attr("src", "https://dummyimage.com/300");
      $("#editImagenShow").data("src", "/" + imagen_src);

      modal.find('.modal-body #editableTitulo').val(titulo);
      modal.find('.modal-body #editableFecha').val(fecha_limite);
      modal.find('.modal-body #editableLiga').val(liga);
      
      modal.modal('show');
      
      setTimeout(() => {
        recargar_imagen(); 
      }, 500);
    })
    
    // clic sobre una celda de la tabla
    $('#example2 tbody').on( 'click', 'tr', function() {
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
    })

    $("#editableImage").on("change", function(){
      
      let images = $( this ).prop('files');
      let image = images[0];

      $("#editImagenShow").data("src", "../img/loading.gif");
      recargar_imagen();

      $("#editImagenShow").data("src", window.URL.createObjectURL(image));
      
      setTimeout(() => {
        recargar_imagen();
      }, 500);
        
    })

    $("#recipientImage").on("change", function(){
      let images = $( this ).prop('files');
      let image = images[0];
      if (image == null){
        // no hay imagen 
        
        $("#contenedorNewImage").hide(500, function(){
          $("#newImagenShow").data("src", "../img/loading.gif");
          recargar_imagen_nueva();
        });
      } else {
        // si hay imagen 
        $("#contenedorNewImage").show(500, function(){
          $("#newImagenShow").data("src", window.URL.createObjectURL(image));
          setTimeout(() => {
            recargar_imagen_nueva();
          }, 500);
        });
        
      }
      
    })

    function btn_loading(btn){
      btn.removeClass("btn-info");
      btn.addClass("btn-warning");
      btn.html("<i class='fa fa-spin fa-spinner'></i> Guardando");
      btn.prop( "disabled", true );
    }

    function btn_normal_guardar(btn){
      btn.removeClass();
      btn.addClass("btn btn-info");
      btn.html("Guardar");
      btn.prop( "disabled", false );
    }

    function btn_error(btn){
      btn.removeClass();
      btn.addClass( "btn btn-danger" );
      btn.html( "<i class='fa fa-warning'></i> Error" );
      btn.prop( "disabled", true );
    }

    function update_info_votaciones( btn ){
      let url = "core/editar_votacion.php";
      let activo = $("#checkboxActivo").is(":checked");
      let mensaje = $("#inputMensaje").val();

      let dateIni = $( "#inputDateIni" ).val();
      let dateFin = $( "#inputDateFin" ).val();

      let year = $( "#inputYear" ).val();

      let send_activo;
      let see_page_nominados;
      let see_page_resultados;

      if (activo){
        send_activo = 1;
      } else {
        send_activo = 0;
      }

      if ($("#checkboxPageNominados").is(":checked")){
        see_page_nominados = 1;
      } else {
        see_page_nominados = 0;
      }

      if ($("#checkboxResultados").is(":checked")){
        see_page_resultados = 1;
      } else {
        see_page_resultados = 0;
      }

      let data = {
        "activo": send_activo,
        "year": year,
        "dateIni": dateIni,
        "dateFin": dateFin,
        "seePageNom": see_page_nominados,
        "seePageRes": see_page_resultados,
        "mensaje": mensaje
      }
      
      $.post(url, data, function(r){
        
          if (r == "ok"){
            btn_normal_guardar( btn );
            toastr.success("Se ha guardado la configuración de las votaciones");
          } else if (r == "sincambios"){
            btn_normal_guardar( btn );
            toastr.info("La configuración se ha guardado sin cambios");
          } else {
            // error
            btn_error( btn );
            toastr.info("<strong>Error:</strong> Un error impidió guardar la información. Inténtelo más tarde");
          }
          
      }).fail(function(){
        console.log("fallo el envio");
         btn_error( btn );
      })

    }

    $("#btnGuardarMejor").on("click", function(){
      let this_btn = $( this );
      btn_loading( this_btn );  
      update_info_votaciones( this_btn );    

    })


  })
</script>
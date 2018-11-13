
    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3>
                Escribir una nueva noticia
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form id="formNoticia">
                <div class="form-group">
                  <label for="inputTitulo">Título:</label>
                    <input name="inputTitulo" class="form-control" type="text" >
                </div>
                <div class="form-group">
                  <textarea name="editor1" rows="10" cols="80"></textarea>
                </div>
                <div class="form-group">
                  <label for="inputFuente">Fuente:</label>
                    <input class="form-control" type="text" name="inputFuente">
                </div>
                <div class="form-group">
                  <input id="btnCancelar" type="reset"  class="btn btn-danger" value="Cancelar"/>
                  <input id="btnEnviarNoticia" class="btn btn-success pull-right" type="submit" value="Guardar" />
                </div
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


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar contenido</h4>
      </div>
      <div class="modal-body">
        <p>¿Está seguro que desea eliminar la noticia que estabas escribiendo?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button type="button" id="btnEliminarContenido" class="btn btn-warning">Eliminar</button>
      </div>
    </div>

  </div>
</div>




<script type="text/javascript">

$(document).ready(function(){
  CKEDITOR.replace('editor1');

  function enviar_noticia(){
    let formNoticia = $("#formNoticia").serialize();
    let url = "core/create_noticia.php";
    let editor_text = CKEDITOR.instances.editor1.getData();
  
    let data = {
      "formNoticia": formNoticia,
      "editorText": editor_text,
    }

    $.post(url, data, function(response){
      if (response == "ok"){
        toastr.success("Noticia creada con éxito");
        setTimeout(() => {
          $("#contenido").load("noticias.php");
        }, 1000);
      } else {
        toastr.warning("No se puede crear la noticia el servidor devolucion de error")
      } 
    }).fail(function(){
      toastr.danger("Un error en el servidor impide crear la noticia");
    });
  }

  $("#btnEnviarNoticia").on("click", function(e){
    e.preventDefault();
    enviar_noticia();
  });

  $("#btnCancelar").on("click", function(e){
    e.preventDefault();
    $("#myModal").modal('show');
  });

  $("#btnEliminarContenido").on("click", function (e) {
    $("#myModal").modal('hide');
    CKEDITOR.instances.editor1.setData("");
    $("#formNoticia").trigger("reset");
  });

});

</script>

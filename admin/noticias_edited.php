<?php
  $noticiaID = $_POST['noticiaID'];

  include_once('core/control.php');

  $noticia_edit = $controller->get_one_noticia($noticiaID);
  
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h2>
                Editar una noticia
              </h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form id="formNoticia">
              <input type="hidden" name="noticia_id" value="<?php echo $noticia_edit['id']; ?>">
                <div class="form-group">
                  <label for="inputTitulo">Título:</label>
                    <input name="inputTitulo" class="form-control" type="text" value="<?php echo $noticia_edit['titulo']; ?>" >
                </div>
                <div class="form-group">
                  <textarea name="editor1" rows="10" cols="80"><?php echo $noticia_edit['noticia']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="inputFuente">Fuente:</label>
                    <input class="form-control" type="text" name="inputFuente" value="<?php echo $noticia_edit['fuente']; ?>" >
                </div>
                <div class="form-group">
                  <input id="btnCancelar" type="reset"  class="btn btn-danger" value="Cancelar"/>
                  <input id="btnEnviarNoticia" class="btn btn-success pull-right" type="submit" value="Guardar" />
               </div>
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
<script type="text/javascript">

$(document).ready(function(){
  CKEDITOR.replace('editor1');

  function enviar_noticia(){
    let formNoticia = $("#formNoticia").serialize();
    let url = "core/editar_noticia.php";
    let editor_text = CKEDITOR.instances.editor1.getData();
  
    let data = {
      "formNoticia": formNoticia,
      "editorText": editor_text,
    }

    $.post(url, data, function(response){
      if (response == "ok"){
        toastr.success("Noticia editada con éxito");
        setTimeout(() => {
          $("#contenido").load("noticias.php");
        }, 1000);
      } else {
        toastr.warning("No se puede guardar la noticia el servidor devolucion de error")
      } 
      console.log(response);
    }).fail(function(){
      toastr.danger("Un error en el servidor impide crear la noticia");
    });
  }

  $("#btnEnviarNoticia").on("click", function(e){
    e.preventDefault();
    enviar_noticia();
  });

  $("#btnCancelar").on("click", function(){
    CKEDITOR.instances.editor1.setData("");
  });


});

</script>

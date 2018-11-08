<?php 
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Canaco</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="static/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="static/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="static/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="static/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="static/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="../css/toastr.min.css">
  <link rel="stylesheet" href="../css/animate.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <img src="../img/canaco_logo.png" class="img-circle" alt="User Image" style="max-width: 6em;">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <br>
    <form id="formLogin" action="#" method="post">
      <div class="form-group has-feedback">
        <label for="inputUsuario">Usuario:</label>
        <input id="inputUsuario" name="inputUsuario" type="text" class="form-control" placeholder="Canaco">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label for="inputPassw">Contraseña:</label>
        <input id="inputPassw" name="inputPassw" type="password" class="form-control" placeholder="*****">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button id="btn-entrar" type="submit" class="btn btn-primary btn-block btn-flat" disabled>Acceder</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="static/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="static/plugins/iCheck/icheck.min.js"></script>
<script src="../js/toastr.min.js"></script>
<script>
  $(function () {
    $('#btn-entrar').on('click', function (e) {
      e.preventDefault();

      var animationName = 'animated shake';
      var animationEnd = 'MSAnimationEnd animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd';
      // comprobar que tenga usuario y contraseña

      // serizalizar form
      url = "access_check.php";
      
      $.post(url, $('#formLogin').serialize(), function(res){
            console.log(res);
            if (res === "0"){
                  console.log('Exito');
                  toastr.success('Validado correctamente.');
                  setTimeout(function() {
                    window.location.href = "dashboard.php";
                  }, 1500);
            } else {
                  console.log('Fracaso' + res);
                  toastr.error('<strong>Error:</strong> Usuario o contraseña incorrecto. Revise.');
                  $('.login-box-body').addClass(animationName).one(animationEnd, function () {
                    $(this).removeClass(animationName);
                  });
            }

      });
      

      // enviar por post de jquery
    
      // Configurar para caso de error
      $("input[type='password']").val('');
      $('#btn-entrar').prop("disabled", true);
    })
    
    $( "input[type='text'],input[type='password']" ).on('input', function() {
      revisar_input();
    });

    function revisar_input(){
      if ($("input[type='text']").val() == '' ||  $("input[type='password']").val() == ''){
        $('#btn-entrar').prop("disabled", true);
      } else {
        $('#btn-entrar').prop("disabled", false);
      }
    }

    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "700",
      "timeOut": "3000",
      "extendedTimeOut": "700",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }

  });
</script>
</body>
</html>

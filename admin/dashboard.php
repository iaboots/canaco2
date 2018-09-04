<?php 
  session_start(); 
  if (isset($_SESSION['usuario']) && isset($_SESSION['rol'])){
    $usuario = $_SESSION['usuario'];
  } else { 
    session_destroy();
    header('location: ../index.html');
  }
  $page_config = 'configuracion.php';
  $page_user   = 'nominados.php';
  $page_noti   = 'noticias.php';
  $page_result = 'resultados.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CANACO 2 | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet" href="../css/toastr.min.css">
  <link rel="stylesheet" href="../css/animate.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <style>
    .span-title {
      padding: 15px;
      font-weight: bold;
      color: white; 
    }
}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>A</b>CAN</span> -->
      <!-- logo for regular state and mobile devices -->
      <!-- <span class="logo-lg"><b>Admin</b>CANACO</span>-->
      
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    <span class="span-title pull-left">CANACO TORREÓN - Sistema de Gestión</span>
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/logo-canacoto-200xbbb.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
                <?php  echo $usuario; ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/logo-canacoto-200xbbb.png" class="img-circle" alt="User Image">
                <p>
                  <?php  echo $usuario; ?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="access_logout.php" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="text-center image" style="height: 80px;">
          <img src="dist/img/logo-canacoto-200xbbb.png" class="img-circle" alt="User Image" style="max-width: 6em;">
        </div>
        <!--
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div> -->
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ</li>
        <!-- Optionally, you can add icons to the links -->
        <li id="liCargarConfig">
          <a href="#"><i class="fa fa-cog"></i>
          <span>Configuración</span></a>
        </li>
        <li id="liCargarNominados">
          <a href="#"><i class="fa fa-users"></i>
          <span>Nominados</span></a>
        </li>
        <li id="liCargarNoticias"> <!-- class="active" -->
          <a href="#"><i class="fa fa-newspaper-o"></i>
          <span>Noticias</span></a>
        </li>
        <!--<li onclick="cargarContenido('socios.html')"><a href="#"><i class="fa fa-graduation-cap"></i> <span>Socios</span></a></li>-->
        <li id="liCargarResultados" >
          <a href="#"><i class="fa fa-cube"></i>
          <span>Resultados</span></a>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="titulo_header">
        Page Header
        <small id="titulo_small">
          Optional description
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <!--------------------------
      | Your Page Content Here |
      -------------------------->
      <div id='contenido'>
        <div class="col-sm-6 col-xs-12">
            <div class="info-box">
              <!-- Apply any bg-* class to to the icon to color it -->
              <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">93,139</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
            <!-- /.info-box -->
        <div class="col-sm-6 col-xs-12">

            <div class="info-box">
              <!-- Apply any bg-* class to to the icon to color it -->
              <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">93,139</span>
              </div>
              <!-- /.info-box-content -->
            </div>
        </div>

      </div>


  </section>
    <div id="body-content">
      <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Administración del sitio
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Canaco</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>

<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="../js/toastr.min.js"></script>
<script src="dist/js/demo.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

<script language="JavaScript">
   
    $(document).ready(function () {

        
     function cargarContenido(pagina)
      {
          // cargamos la pagina pagina.html en el div contenido
          $("#contenido").load(pagina, function () {
              
              $('#example1').DataTable({
                  'paging'      : true,
                  'lengthChange': false,
                  'searching'   : false,
                  'ordering'    : true,
                  'info'        : true,
                  'autoWidth'   : false
              });
              if (pagina == "noticias.html") {
                  CKEDITOR.replace('editor1');
                  //bootstrap WYSIHTML5 - text editor
                  $('.textarea').wysihtml5();
              }
          });
              
          switch (pagina) {
            case "<?php echo $page_config ?>":
              $('#titulo_header').html('Configuración');
              break;
            case "<?php echo $page_user ?>":
              $('#titulo_header').html('Nominados');
              break;
          
            default:
              break;
          }

          
      }


        $('#liCargarConfig').on('click', function(e){
          var pagina = "<?php  echo $page_config; ?>";
          cargarContenido(pagina);
        });

        $('#liCargarNominados').on('click', function(){
          var pagina = "<?php echo $page_user; ?>";
          cargarContenido(pagina);
        });

        $('#liCargarNoticias').on('click', function(){
          var pagina = "<?php echo $page_noti;  ?>";
          cargarContenido(pagina);
        });

        $('#liCargarResultados').on('click', function(){
          var pagina = "<?php echo $page_result;  ?>";
          cargarContenido(pagina);
        })

    });
</script>

</body>
</html>
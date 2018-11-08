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
  $page_noti_new   = 'noticias_new.php';
  $page_result = 'resultados.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CANACO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="static/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="static/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="static/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="static/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="static/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="static/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="static/dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet" href="../css/toastr.min.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="static/loader.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <style type="text/css">
    #loader{z-index:4; }
    .span-title {
      padding: 15px;
      font-weight: bold;
      color: white; 
    }
    .vcenter {
      display: inline-block;
      vertical-align: middle;
      float: none;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini"><div id="loader"></div>
<div class="body-cargador" id="bodyid">
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
              <img src="static/dist/img/logo-canacoto-200xbbb.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
                <?php  echo $usuario; ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="static/dist/img/logo-canacoto-200xbbb.png" class="img-circle" alt="User Image">
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
          <img src="static/dist/img/logo-canacoto-200xbbb.png" class="img-circle" alt="User Image" style="max-width: 6em;">
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active" id="titulo_li">Inicio</li>
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
  </div><!-- body cargador -->
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="static/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="static/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="static/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="static/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- FastClick -->
<script src="static/bower_components/fastclick/lib/fastclick.js"></script>
<script src="static/dist/js/adminlte.min.js"></script>

<!-- CK Editor -->
<script src="static/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="static/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="../js/toastr.min.js"></script>
<script src="static/dist/js/demo.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

<script language="JavaScript">
   
  $(document).ready(function () {

    function cargarContenido(pagina) {
      // Ocultamos la carga de a pagina
      hide_windows()
        // cargamos la pagina pagina.html en el div contenido
      $("#contenido").load(pagina, function () {

        if (pagina == "<?php echo $page_user; ?>"){
          $('#example1').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
          });
        }
        
          
        if (pagina == "<?php echo $page_noti;  ?>") {
           // CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
           // $('.textarea').wysihtml5();
        }
        
        var page_name = 'Inicio';

        switch (pagina) {
            case "<?php echo $page_config ?>":
              page_name = 'Configuración';
              break;
            case "<?php echo $page_user ?>":
              page_name = 'Nominados';
              break;
            case "<?php echo $page_noti ?>":
              page_name = 'Noticias'              
              break;
            case "<?php echo $page_result ?>":
              page_name = 'Resultados';
              break;
          
            default:
              break;
        }
        
        $('#titulo_header').html(page_name);
        $('#titulo_li').html(page_name);

        show_window();

      });
    } // fin de la función cargar contenido
 
      
    $('#liCargarConfig').on('click', function(){
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
    });

    function show_window(){
        setTimeout(() => {
        $('#loader').fadeOut("fast");
        $(".body-cargador").css('visibility', 'visible');
      }, 50);
    }

    function hide_windows(){
      $('#loader').fadeIn("fast");
      $(".body-cargador").css('visibility', 'hidden');
    }

    show_window();

  });

   $(document).ready(function() {
     
   
    //$(".container").addClass("animated fadeIn");
   // $("#title-section").addClass("animated fadeInLeft");
   // $("#logoimg").addClass("animated fadeInRight");
   // $(".footer").addClass("animated slideInUp");

  });

 
</script>

</body>
</html>
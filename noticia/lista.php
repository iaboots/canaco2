<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rally Coahuila 1000</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
		<link rel="manifest" href="../img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		
		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font -->
		
		
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/estilotramite.css">

        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
		<script src="../js/csi.min.js"></script>
		
		<style>
			 img.img-responsive{
				 padding-top: 1.5em;
				 width: 30%;
			 }
			 a.ver-mas {
				 color: #0664B8;
				 font-weight: bold;
			 }
		</style>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- Header Start -->
		<header>
			
			<!-- Main Menu Start -->
			<div class="main-menu">
				<div class="navbar-wrapper">
					<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
								<a href="" class="navbar-brand"><img src="../img/logobbb.png" alt="Logo" /></a>							
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="../index.php">Inicio</a></li>
									<li><a href="../index.php#bienvenidos">Bienvenida</a></li>
									<li><a href="../votacion.php">Votación</a></li>
									<li><a href="../index.php#features">Servicios</a></li>
									<li><a href="../index.php#blog">Eventos</a></li>
									<li><a href="../index.php#about">Historia</a></li>
									<li><a href="../index.php#contact-us">Contacto</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Main Menu End -->
			
			
		</header>
		<!-- Header End -->
		
		
		
		<section class="blog-single">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="single-blog text-center wow slideInLeft">
							<h3 style="text-decoration: underline;" >Noticias</h3>
						</div>
					</div>
				</div>
				<!-- listado de noticias -->
				 
				 <?php
					 include("../admin/core/control.php");
					 $all_noticias = $controller->get_all_list();
					 foreach($all_noticias as $key => $nom){ ?>					 
						<div class="row">
							<div class="col-md-12">
								<div class="single-blog wow slideInLeft">
									<h4><?php echo $nom['titulo'] ?></h4>
									<!--<img class="img-responsive img-rounded" 
										src="../img/historiabbb.jpg" 
										alt="Blog Image" /> -->
									<p><?php echo $nom['noticia'] ?>...
										<a href="detalle.php?noti=<?php echo $nom['id']; ?>" class="ver-mas">Ver más</a>

									</p>
									
								</div>
							</div>
						</div>

					<?php }
				 ?>

			</div>
		</section>
		
		<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
				
					<!-- Single Footer -->
					<div class="col-sm-3">
						<div class="single-footer">
							<div class="footer-logo">
								<img src="../img/logo-canacoto-200xbbb.png" alt="Footer Logo" />
							</div>
						</div>
					</div>
					<!-- Single Footer -->
					
					
					<!-- Single Footer -->
					<div class="col-sm-3">
						<div class="single-footer">
							<h4>Nuestras oficinas</h4>
							<p>Av. Matamoros 434 Pte. <br />
							Col. Centro <br />
							Torreón, Coah. México<br />
						    C.P. 27000</p>
						</div>
					</div>
					<!-- Single Footer -->
					
					
					<!-- Single Footer -->
					<div class="col-sm-3">
						<div class="single-footer">
							<h4>Contacto</h4>
							<p><span>
								<i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
								    Teléfonos: 716.8822 - 716.2404 <br />
							<span>
							   <i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
							</span>
						    	<a target="_top" href="mailto:info@canacotorreon.com.mx">
								     Email: info@canacotorreon.com.mx</a>
							<br />
							<span>
								<i class="fa fa-internet-explorer fa-lg" aria-hidden="true"></i>
							</span>
							<a href="http://www.canacotorreon.com.mx" target="_blank" >
							Web: www.canacotorreon.com.mx</a></p>
						</div>
					</div>
					<!-- Single Footer -->
					
					<!-- Single Footer -->
					<div class="col-sm-3">
						<div class="single-footer">
							
						</div>
					</div>
					<!-- Single Footer -->
					
				</div>
			</div>
			
		</footer>
		
		<!-- Copyright -->
		<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="copy-text">
								<p>All Rights Reserved | Copyright 2018 © </p>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="footer-menu pull-right">
								<ul>
									<li><a href="../index.php#home">Inicio</a></li>
									
									<li><a href="../index.php#features">Servicios</a></li>
									<li><a href="../index.php#blog">Eventos</a></li>
									<li><a href="../index.php#about">Historia</a></li>
									<li><a href="../index.php#contact-us">Contacto</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="social">
								<ul>
									<li>
										<a href="https://www.facebook.com/canacoservyturtorreon/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li>
										<a href="https://twitter.com/canacotorreon" target="_blank"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<!-- footer -->
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="../js/paralax.js"></script>
        <script src="../js/jquery.smooth-scroll.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/main.js"></script>
       <script type="text/javascript">
			$(document).ready(function(){
				$('a[href^="#"]').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						 'scrollTop': $target.offset().top
					}, 900, 'swing');
					});
			});
		</script>
		<script src="../js/custom.js"></script>
    </body>
</html>



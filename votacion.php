<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Votaciones</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
		<link rel="manifest" href="img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		
		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font -->
		
		
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/estilotramite.css">
		
		<link rel="stylesheet" href="css/toastr.min.css">


        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<style>
			.single-vota{
				background: url("img/fondovotaciones.png") no-repeat scroll right center #e8e8e8;
				background-size: cover;
				height: 280px; 
			
				/*margin: 20, 20, 20, 20;*/
			
				background-origin: content-box;
				background-position: right 5px top 10px;
			}

			.single-blog h4 {
				color: white;
				text-align: right;
				padding-top: 8%;
				margin-right: 5%;
			}
			.single-blog p {
				padding-top:2%;
				text-align: center;
				color: white;
			}
			.single-blog h3 {
				color: white;
				text-align: center;
			}
			.single-blog h5 {
				color: white;
				text-align: center;
			}
			.h5-categoria-titulo {
				padding-top: 4%;
			}
			.h2-categoria {
				color: white;
				text-align: center;
				margin-padding: 10%;
			}
			.btn-votar {
				text-align: right;
				padding-right: 25px;
			}
			.btn-votar-item {
				color: white !important;
				
				
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
								
								<a href="index.php" class="navbar-brand"><img src="img/logobbb.png" alt="Logo" /></a>							
							</div>
							
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="index.php">Inicio</a></li>
									<li><a href="index.php#bienvenidos">Bienvenida</a></li>
									<li><a href="index.php#features">Servicios</a></li>
									<li><a href="noticia/lista.php">Noticias</a></li>
									<li><a href="index.php#blog">Eventos</a></li>
									<li><a href="index.php#about">Historia</a></li>
									<li><a href="index.php#contact-us">Contactos</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Main Menu End -->
			
			
		</header>
		<!-- Header End -->
		
		<!-- From the Blog-->
		
		<section id="blog" class="site-padding">
			<div class="container">
				<div class="row wow fadeIn">
					<div class="col-sm-12">
						<div class="title">
							<h3><span>Votación</span> El mejor de mi ciudad</h3>
						</div>
					</div>
				</div>
				<?php
					include_once('admin/core/control.php');
					$all_nominados = $controller->get_nominados_concursantes();
					if (!empty($all_nominados)) {
						$cont = 0;
						foreach ($all_nominados as $key => $nom) {
							if ($cont % 3 == 0){ ?>
								<div class='row'>
							<?php } ?>
							
							<div class="col-md-4 col-sm-12 wow fadeIn single-vota">
								<div class="single-blog"  >
								<h4>
									El Mejor de mi ciudad
								</h4>
								<p><?php echo $nom['nombre']; ?></p>
								<h3>Nominado</h3>
								<h5>en</h5>
								<h5 class="h5-categoria-titulo">CATEGORÍA</h5>
								<h2 class="h2-categoria"><?php echo $nom['categoria']; ?></h2>
								<div class="btn-votar">
									<a class="btn btn-primary btn-votar-item"
										data-vota-id="<?php echo $nom['id'] ?>">
										<i class="fa fa-star"></i>
										Votar
									</a>
							    </div>
								<br><br>
										
								</div>
							</div>
						
					<?php   
							if ($cont % 2 == 0 && $cont != 0){ ?>
								</div>
							<?php } 
							$cont++;
						} // fin del foreach
					} // fin del if
						?>
					
						
			
			</div>
		</section>
		
		<!-- From the Blog-->
		
		
			<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
				
					<!-- Single Footer -->
					<div class="col-sm-3">
						<div class="single-footer">
							<div class="footer-logo">
								<img src="img/logo-canacoto-200xbbb.png" alt="Footer Logo" />
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
									<li><a href="index.php#home">Inicio</a></li>
									<li><a href="index.php#features">Servicios</a></li>
									<li><a href="index.php#blog">Eventos</a></li>
									<li><a href="index.php#about">Historia</a></li>
									<li><a href="index.php#contact-us">Contacto</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="social">
								<ul>
									<li>
										<a href="https://www.facebook.com/canacoservyturtorreon/?fref=ts" target="_blank" ><i class="fa fa-facebook"></i></a></li>
									<li>
										<a href="https://twitter.com/canacotorreon" target="_blank" ><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<!-- footer -->
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="js/paralax.js"></script>
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/toastr.min.js"></script>
		<script src="js/js.cookie.js"></script>

       <script type="text/javascript">
			$(document).ready(function(){
				
				let cook_votacion = Cookies.get('votacion');
				var listado_votacion;
				
				if (cook_votacion == null){
					Cookies.set('votacion', JSON.stringify([]), { expires: 30 });
					listado_votacion = [];
				} else {
					listado_votacion = JSON.parse(cook_votacion);
				}

				function agregar_cookie_votacion( newId ){
					listado_votacion.push( newId  );
					Cookies.set('votacion', JSON.stringify( listado_votacion ), { expires: 30 });
				}

				function ya_existe_votacion( id ){
					return listado_votacion.includes( id );
				}

				toastr.options = {
					"closeButton": true,
					"debug": false,
					"newestOnTop": false,
					"progressBar": true,
					"positionClass": "toast-bottom-left",
					"preventDuplicates": false,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				}


				$('a[href^="#"]').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						 'scrollTop': $target.offset().top
					}, 900, 'swing');
				});

				

				function btn_cargando(btn){
					btn.removeClass();
					btn.addClass("btn btn-warning btn-votar-item disabled");
					btn.html("<i class='fa fa-spinner fa-spin'></i> Votando");
				}

				function btn_votaste(btn){
					btn.removeClass();
					btn.addClass("btn btn-votar-item btn-success disabled");
					btn.html("<i class='fa fa-check'></i> Votaste");
				}

				function btn_error(btn){
					btn.removeClass();
					btn.addClass("btn btn-danger btn-votar-item disabled");
					btn.html("<i class='fa fa-times'></i> Error");
				}

				function btn_ya_votaste( btn ){
					btn.removeClass();
					btn.addClass("btn btn-info btn-votar-item disabled");
					btn.html("<i class='fa fa-exclamation-triangle'></i> Ya votaste");
				}

				function ir_a_votar(id, btn){
					let url = "ir_votar.php";
					let data = {
						"votaId": id
					}
					$.post(url, data, function(r){
						console.log(r);
						if ( r == "ok" ){
							toastr.success("Has votado correctamente");
							setTimeout(() => {
								btn_votaste( btn );
							}, 500);
						} else {
							toastr.error("Hay un error a la hora de votar");
							setTimeout(() => {
								btn_error( btn );
							}, 500);
							
						}

					}).fail(function(){
						alert("fallo");
					})
				}

				$( ".btn-votar-item" ).on( "click", function(e){
					e.preventDefault();
					let $btn = $( this );
					btn_cargando( $btn );
					let vota_id = $btn.data( "vota-id" );
					if (ya_existe_votacion( vota_id )){
						toastr.info( "Ya votaste en este periodo por este nominado", "Ya votaste" );
						btn_ya_votaste( $btn );
					} else {
						ir_a_votar( vota_id, $btn );
						agregar_cookie_votacion( vota_id );
					}
				} )
			});
		</script>
		<script src="js/custom.js"></script>

    </body>
</html>

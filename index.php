<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CANACOSERVITUR</title>
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
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style type="text/css">
			
			.navbar-brand>img {
			   width: auto;
			   margin: 0 auto;

			   /* probably not needed anymore, but doesn't hurt */
			   -o-object-fit: contain;
			   object-fit: contain; 
			}
			.carousel-inner { text-align: center; }
	        .carousel .item > img { display: inline-block; }

	        @media only screen and (min-width: 59.6875em) {
			    /* tablets and desktop */
			    .navbar-brand>img {
 			   		max-height: 230%;
 			   		height: 240%;
 			   }
 			   .navbar-brand { margin-top: -10px;}
			}

	        @media only screen and (max-width: 59.6875em) {
 			   .navbar-brand>img {
 			   		max-height: 120%;
 			   		height: 120%;
 			   }
 			   .navbar-brand { margin-top: 5px;}
			}
			#bienvenidos { 
				background: #f7f7f7;
			}

			.video {
			   background: #f7f7f7;	
			   position: relative;
			   padding-bottom: 1%;
			}
		
			#bienvenidos.site-padding { 
				padding: 0px 0 10px;
			}
			#classiframe {
				padding: 10px 0;
			}
			#indicadores {
				height: 40px; 
			}
			#myiframe:focus {
				 outline: none;
			}
			#myiframe {
				display: block;
			}
			.fb-page,
			.fb-page span,
			.fb-page span iframe[style] {
			    max-width: 100% !important;
			}

		</style>
		
		
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<!-- Header Start -->
		<header id="home">
			
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
								<a href="index.html" class="navbar-brand">
								   <img  class="img-responsive" src="img/logobbb.png" alt="Logo" /></a>							
							</div>
							
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="#home">Inicio</a></li>
									<li><a href="#bienvenidos">Bienvenida</a></li>
									<li><a href="#features">Servicios</a></li>
									<li><a href="#blog">Eventos</a></li>
									<li><a href="#about">Historia</a></li>
									<li><a href="#contact-us">Contacto</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Main Menu End -->

			<!-- Sider Start -->
			<div class="slider">
				<div id="fawesome-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators indicatior2">
						<li data-target="#fawesome-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#fawesome-carousel" data-slide-to="1"></li>
						<li data-target="#fawesome-carousel" data-slide-to="2"></li>
						<li data-target="#fawesome-carousel" data-slide-to="3"></li>
						<?php
							include 'admin/core/control.php';
							$all_images = $controller->get_image_for_splash();
							$cant = count($all_images);

							if ($cant > 0){
								for ($i = 1; $i < $cant; $i++) { ?>
									<li data-target="#fawesome-carousel" data-slide-to="<?php echo $i + 3; ?>"></li>
								<?php }
								
							}
						?>
					</ol>
				    <!-- init carousel inner -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/slide1bbb.jpg" alt="Sider Big Image" class="img-rounded">
						</div>
						<div class="item" id="item2">
							<a href="http://coahuila1000.com.mx" target="_blank">
								<img src="img/slide2bbb.jpg" alt="Sider Big Image"  class="img-rounded">
							</a>
						</div>
						<div class="item" id="item3">
							<img src="img/slide3bbb.jpg" alt="Sider Big Image"  class="img-rounded">
						</div>
						<?php
							$cont = 4;
						
							foreach ($all_images as $key => $nom) { ?>
								<div class="item" id="item<?php echo $cont++; ?>">
									<a href="<?php echo $nom['liga']; ?>" target="_blank">
										<img  style="heigth: 100%; width: 100%"  src="<?php echo $nom['ruta']; ?>" alt="<?php echo $nom['titulo']; ?>"  class="img-rounded">
									</a>
								</div>
								<?php }
						?>
							
					</div>
					<!-- end carousel inner -->
				</div>
			</div>
			<!-- Sider End -->
		</header>
		<!-- Header End -->
			<!-- Iframe Section  style="background-color:#bbb;" -->
		 <div id="indicadores"  style="background-color:#f7f7f7;"> 
			 <!-- <div class="container-fluid">  col-md-offset-1" -->
					<div id="classiframe" class="col-md-offset-1"  >
						<!-- <iframe style="float:middle" title="Indicadores" width="100%" height="100%" src="http://finanzasenlinea.infosel.com/concanaco/ticker.aspx?wmode=transparent" frameborder="0">Su navegador no soporta iframe para ver los indicadores</iframe> -->
						<!-- </div> -->
						<iframe id="myiframe" class ="myiframe" src="https://finanzasenlinea.infosel.com/concanaco/ticker.aspx?wmode=transparent" frameborder="0" height="45px" width="100%" align="middle" allow="autoplay; encrypted-media" >Su navegador no soporta iframe para ver los indicadores</iframe>
				  </div>
		 </div> 
		<!-- Iframe Section -->


	<!-- About Section -->
		<section id="bienvenidos" class="site-padding">
			<div class="container">
				<div class="row">
					<div class="about-text text-center wow fadeInUp">
						
							<h3>Bienvenidos a Canaco Torreón</h3>
							<p>La Cámara Nacional de Comercio, Servicios y Turismo de Torreón, tiene como misión principal representar, defender y ofrecer a sus socios el apoyo que requiere para resolver los problemas y fomentar la unión y el crecimiento de las empresas de nuestro sector; y para cumplir con nuestra misión, hemos creado una gran variedad de servicios diseñados especialmente para usted.</p>
					</div>
						<div class="about-text text-center wow fadeInUp">
							<h4>Estamos para atenderle</h4>
							<p>Nos permitimos presentar los servicios y los beneficios que le brindamos y que usted puede aprovechar. Para su constitución hemos clasificado en las siguientes áreas:</p>
							 <p></p>
						    <ul class="list-group">
								  <li class="list-group-item">
								    <i class="fa fa-check" aria-hidden="true"></i>
								  	Dirección General .   .   .
								    <i class="fa fa-check" aria-hidden="true"></i>
								     Afiliación SIEM 
								  <li class="list-group-item">
								    <i class="fa fa-check" aria-hidden="true"></i>
								   Recepción  .   .   .
								  	<i class="fa fa-check" aria-hidden="true"></i>
								     Dirección de Finanzas  .   .   .
								   	 <i class="fa fa-check" aria-hidden="true"></i>
								   	  Dirección de Servicios</li>
								  <li class="list-group-item">
								      <i class="fa fa-check" aria-hidden="true"></i>
								      Dirección de Capacitación y Eventos  .   .   .
								      <i class="fa fa-check" aria-hidden="true"></i>
								      Contabilidad</li>
							</ul>
							<br>
					</div>
				</div>
			</div>
		</section>
		<!-- About Section -->
		
		<!-- Feature Section -->
		
		<section id="features" class="site-padding">
		
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Nuestros <span>Servicios</span></h3>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
				
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-arrow-down"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Tr&aacute;mites Municipales</h4>
										<p>Es un servicio que proporciona CANACO Torreón, donde se brinda una gran cantidad de apoyos a los socios para facilitarles...</p>
										<a href="servicios/01.tramitesmunicipales.html">Leer m&aacute;s>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeIn">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-arrow-right"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Trámites Estatales</h4>
										<p>Proporcionar a los socios representación, apoyo y defensa administrativa en asuntos estatales y federales...</p>
										<a href="servicios/02.tramitesestatales.html">Leer m&aacute;s>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-arrows "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Trámites Federales</h4>
										<p>Proporcionar a los socios representación, apoyo y defensa administrativa en asuntos estatales y federales...</p>
										<a href="servicios/03.tramitesfederales.html">Leer m&aacute;s>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					
					
				</div>
				
				
				<div class="row">
				
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-street-view "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Nuevos Negocios</h4>
										<p>Asesoría y gestión en la tramitación y oportunidades de nuevos negocios. Brindar al público en general la asesoría referente a ...</p>
										<a href="servicios/04.nuevosnegocios.html">Leer m&aacute;s>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeIn">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-building"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Capacitación</h4>
										<p>Un servicio que proporciona la CANACO Torreón, en materia de capacitación para la planta laboral de las empresas de la región...</p>
										<a href="servicios/05.capacitacion.html">Leer m&aacute;s>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-group"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Afiliación a Canaco Torreón</h4>
										<p>Asesoría y gestión en la tramitación de su inscripción y registro como socio a la Cámara Nacional de Comercio de Torreón...</p>
										<a href="servicios/07.afiliacion.html">Leer m&aacute;s>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-cogs "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Bolsa de Trabajo</h4>
										<p>Es un servicio muy útil para las empresas que se encuentren requiriendo personal calificado, y para las personas en general que buscan...</p>
										<a href="servicios/06.bolsadetrabajo.html">Leer m&aacute;s>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeIn">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-diamond "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Salas</h4>
										<p>Tenemos la sala ideal, para integrar a su equipo de trabajo...</p>
										<p></p>
										<a href="servicios/10.salas.html">Leer m&aacute;s>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-edit "></i>
										
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Registro al SIEM</h4>
										<p>SIEM, Sistema de Información Empresarial México, es un sistema de información para promover los contactos de negocios entre...</p>
										<a href="servicios/08.siem.html">Leer m&aacute;s>></a>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<!-- espacio en blanco -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeIn">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-legal "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Asesoría Legal</h4>
										<p>Asesoria y diagnóstico legal en las áreas mercantil,laboral y fiscal, para los socios que lo requieran.</p>
										<a href="servicios/09.asesorialegal.html">Leer m&aacute;s>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<!-- espacio en blanco -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->


				</div>
				
				
			</div>
		</section>
		
		<!-- Feature Section -->
		
		<!-- From the Blog-->
		
		<section id="blog" class="site-padding">
			<div class="container">
				<div class="row wow fadeIn">
					<div class="col-sm-12">
						<div class="title">
							<h3><span>Eventos</span> que promovemos</h3>
						</div>
					</div>
				</div>
				
				<div class="row">
				
					<!-- Single Blog -->
					<div class="col-sm-4 wow fadeInLeft">
						<div class="single-blog">
							<img src="img/miniaturas/eventos/coahuila-1000-001bbb.jpg" 
							     alt="Blog Image" />
							<h4><a href="eventos/01.rallycoahuila.html">Rally Coahuila 1000</a></h4>
							<p>Evento creado por la CANACO TORREÓN y apoyado por el Gobierno del Estado de Coahuila, con la finalidad de promover el turismo de aventura, en una travesía...</p>
							<a href="eventos/01.rallycoahuila.html"><strong>Leer m&aacute;s>></strong></a>
						</div>
					</div>
					<!-- Single Blog -->
					
					<!-- Single Blog -->
					<div class="col-sm-4 wow fadeIn">
						<div class="single-blog">
							<img src="img/miniaturas/eventos/Comida_1bbb.jpg" alt="Blog Image" />
							<h4><a href="eventos/02.comidadeamistad.html">Comida de la Amistad</a></h4>
							<p>Evento que se realiza para estrechar los lazos de amistad y camaradería que existe entre los empresarios y los servidores públicos, buscando las buenas relaciones...</p>
							<a href="eventos/02.comidadeamistad.html"><strong>Leer m&aacute;s>></strong></a>
						</div>
					</div>
					<!-- Single Blog -->
					
					<!-- Single Blog -->
					<div class="col-sm-4 wow fadeInRight">
						<div class="single-blog">
							<img src="img/miniaturas/eventos/expo-regreso-clases-001bbb.jpg" alt="Blog Image" />
							<h4><a href="eventos/03.exporegresoaclases.html">Expo Regreso a Clases</a></h4>
							<p>Aprovecha para adquirir articulos escolares a los mejores precios. Evento que reúne a los proveedores más importantes de la región en el giro de útiles escolares...</p>
							<a href="eventos/03.exporegresoaclases.html"><strong>Leer m&aacute;s>></strong></a>
						</div>
					</div>
					<!-- Single Blog -->
				</div>
				<div class="row">

					<!-- Single Blog evento de el mejor-->
					<div class="col-sm-4 wow fadeInRight">
						<div class="single-blog">
							<!-- vacio -->
							<p> . </p>
						</div>
					</div>
					<!-- Single Blog -->

					<!-- Single Blog -->
					<div class="col-sm-4 wow fadeIn">
						<div class="single-blog">
							<img src="img/miniaturas/eventos/rodadabbb.jpg" alt="Blog Image" />
							<h4><a href="eventos/04.rodada.html">Rodada Viesca</a></h4>
							<p>La Cámara Nacional de Comercio (Canaco) de Torreón en coordinación con el colectivo ciclista “Laguna Bikes” y el Instituto Municipal del Deporte de Torreón...</p>
							<a href="eventos/04.rodada.html"><strong>Leer m&aacute;s>></strong></a>
						</div>
					</div>
					<!-- Single Blog -->

					<!-- Single Blog -->
					<div class="col-sm-4 wow fadeInRight">
						<div class="single-blog">
							<!-- vacio -->
							<p> </p>
						</div>
					</div>
					<!-- Single Blog -->
					
					
				</div>
				<!-- fin del row -->
				
			</div>
		</section>
		
		<!-- From the Blog-->

		<!-- About Section -->
		<section id="about" class="site-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="about-image wow fadeInLeft">
							<img src="img/historiabbb.jpg" 
							     alt="About Image" 
							     class="img-responsive img-rounded"/>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="about-text wow fadeInRight">
							<h3>Nuestra Historia</h3>
							<p>La CANACOTO, es un organismo intermedio, orientado a lograr la máxima eficiencia del sector comercial para que en consecuencia la sociedad cuente con un sector comercial dedicado a satisfacer plenamente las necesidades de bienes y servicios.</p>
							<p>Para lograrlo la CANACOTO debe:</p>
							<p>Promover que las empresas comerciales tengan seguridad jurídica y ventajas competitivas para que a su vez alcance altos niveles de rentabilidad. Orientar las acciones del gobierno para que se establezca la infraestructura legal y material, creando condiciones de cooperación entre el sector público y privado, necesarias para que las empresas se puedan desempeñar con efectividad.</p>
							<a href="historia.html" class="btn btn-read-more">Leer m&aacute;s</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Section -->	
		
		<!-- Contact -->
		<section id="contact-us">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Nuestra <span>Ubicaci&oacute;n</span></h3>
						</div>
					</div>
				</div>
			</div>
		
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1799.9716110568763!2d-103.45421314845377!3d25.540268126962584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fd963d2ee7009%3A0x44c2c7a3c6b8cbef!2sAv+Matamoros+434%2C+Primero+de+Cobi%C3%A1n+Centro%2C+27000+Torre%C3%B3n%2C+Coah.!5e0!3m2!1ses-419!2smx!4v1524592034390" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		
			<div class="contact">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h4>Forma de Contacto</strong></h4>
							<p>Comun&iacute;cate directamente con nosotros, para cualquier duda que tengas sobre nuestros servicios, eventos, sugerencias, bolsa de trabajo, renta de salas para capacitación o eventos especiales. Estamos listos para atenderte.</p>

							<form id="contactform" action="sendbyemail.php" method="post" class="validateform" name="send-contact">
								<div class="row">
									<div class="col-lg-4 field">
										<input type="text" id="name" name="name" placeholder="* Nombre" data-rule="maxlen:4" data-msg="Por favor introducir m&aacute;s caracteres" />
										<div class="validation">
										</div>
									</div>
									<div class="col-lg-4 field">
										<input type="text" id="email" name="email" placeholder="* Su correo" data-rule="email" data-msg="Por favor indique su correo correctamente" />
										<div class="validation">
										</div>
									</div>
									<div class="col-lg-4 field">
										<input type="text" id="subject" name="subject" placeholder="Asunto" data-rule="maxlen:4" data-msg="Por favor introducir m&aacute;s caracteres" />
										<div class="validation">
										</div>
									</div>
									<div class="col-lg-12 margintop10 field">
										<textarea rows="12" id="message" name="message" class="input-block-level" placeholder="* Su mensaje aqu&iacute;..." data-rule="required" data-msg="Por Favor escriba aqu&iacue;"></textarea>
										<div class="validation">
										</div>
										<p>
											<button id='btn_enviar_comentario' class="btn btn-theme margintop10 pull-left" type="submit">Enviar Mensaje</button>
											
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
						 <div id="exito" style="display:none">
				            <strong>Su mensaje han sido enviado con éxito.</strong>
				        </div>
				        <div id="fracaso" style="display:none">
				            <strong>Se ha producido un error durante el envío de los datos.</strong>
				        </div>
				</div>
			</div>
		</section>		
		<!-- Contact -->

		<!-- About Section -->
		<section id="informa" class="site-padding" style="background-color:#f7f7f7;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Redes <span>Sociales</span></h3>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="about-image wow fadeIn">
							<!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcanacoservyturtorreon%2F%3Ffref%3Dts&tabs=timeline&width=540&height=610&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="540" height="610" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
							<div class="fb-page" data-href="https://www.facebook.com/canacoservyturtorreon" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" height="610" data-width="585"><blockquote cite="https://www.facebook.com/canacoservyturtorreon" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/canacoservyturtorreon">Canaco Servytur De Torreon</a></blockquote></div>

						</div>
					</div>
					<div class="col-sm-6">
						<div class="about-image wow fadeIn">
							 <a class="twitter-timeline" data-chrome="nofooter" height="610" href="https://twitter.com/canacotorreon">Tweets por canacotorreon</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- About Section -->
		
		
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
								<p>All Rights Reserved | Copyright 2018 © <strong>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="footer-menu pull-right">
								<ul>
									<li><a href="#home">Inicio</a></li>
									<li><a href="#features">Servicios</a></li>
									<li><a href="#blog">Eventos</a></li>
									<li><a href="#about">Historia</a></li>
									<li><a href="#contact-us">Contacto</a></li>
									<li><a href="admin/login.php">Mi cuenta</a></li>
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
			</div> <!-- fin del copyright -->
		
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

				$('#btn_enviar_comentario').on('click', function(e){
					e.preventDefault();
					postAjax();

				});
				function postAjax() {
				  if (!validaForm()) { return; }


				  var url = 'sendbyemail.php';

				  $.post(url, $('#contactform').serialize(), function(res){
					  	$("#contactform").fadeOut("slow");
					  	console.log(res);
					  	if (res == 1){
					  		 $("#exito").delay(500).fadeIn("slow"); 
					  	} else {
					  		 $("#fracaso").delay(500).fadeIn("slow");
					  	}

				  });
				}

			  function validaForm(){
			    // Campos de texto
			    if($("#name").val() == ""){
			        alert("El campo Nombre no puede estar vacío.");
			        $("#name").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
			        return false;
			    }
			    if($("#email").val() == ""){
			        alert("El campo Correo no puede estar vacío.");
			        $("#email").focus();
			        return false;
			    }
			    if($("#subject").val() == ""){
			        alert("El campo Asunto no puede estar vacío.");
			        $("#subject").focus();
			        return false;
			    }
			    if($("#message").val() == ""){
			        alert("El campo Mensaje no puede estar vacío.");
			        $("#message").focus();
			        return false;
			    }

			    return true; // Si todo está correcto
			}


			});
		</script>
		
		<script src="js/custom.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

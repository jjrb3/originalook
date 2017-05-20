<!DOCTYPE html>

<html lang="en">



<head>



	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">

	<meta name="author" content="">



	<title>originalook</title>



	<!-- Bootstrap Core CSS -->

	<link href="{{asset('tema_cliente/css/bootstrap.min.css')}}" rel="stylesheet">



	<!-- Custom CSS -->

	<link href="{{asset('tema_cliente/css/agency.css')}}" rel="stylesheet">



	<!-- Custom Fonts -->

	<link href="{{asset('tema_cliente/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

	<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>



	  

	<link href='https://fonts.googleapis.com/css?family=Merienda:400,700' rel='stylesheet' type='text/css'>



<script type='text/javascript'>

// <![CDATA[

var colour="#FFFFFF";

/*var colour="#e5b717";*/

var sparkles=40;

	



var x=ox=400;

var y=oy=300;

var swide=800;

var shigh=600;

var sleft=sdown=0;

var tiny=new Array();

var star=new Array();

var starv=new Array();

var starx=new Array();

var stary=new Array();

var tinyx=new Array();

var tinyy=new Array();

var tinyv=new Array();

window.onload=function() { if (document.getElementById) {

var i, rats, rlef, rdow;

for (var i=0; i<sparkles; i++) {

var rats=createDiv(3, 3);

rats.style.visibility="hidden";

document.body.appendChild(tiny[i]=rats);

starv[i]=0;

tinyv[i]=0;

var rats=createDiv(5, 5);

rats.style.backgroundColor="transparent";

rats.style.visibility="hidden";

var rlef=createDiv(1, 5);

var rdow=createDiv(5, 1);

rats.appendChild(rlef);

rats.appendChild(rdow);

rlef.style.top="2px";

rlef.style.left="0px";

rdow.style.top="0px";

rdow.style.left="2px";

document.body.appendChild(star[i]=rats);

}

set_width();

sparkle();

}}

function sparkle() {

var c;

if (x!=ox || y!=oy) {

ox=x;

oy=y;

for (c=0; c<sparkles; c++) if (!starv[c]) {

star[c].style.left=(starx[c]=x)+"px";

star[c].style.top=(stary[c]=y)+"px";

star[c].style.clip="rect(0px, 5px, 5px, 0px)";

star[c].style.visibility="visible";

starv[c]=50;

break;

}

}

for (c=0; c<sparkles; c++) {

if (starv[c]) update_star(c);

if (tinyv[c]) update_tiny(c);

}

setTimeout("sparkle()", 40);

}

function update_star(i) {

if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";

if (starv[i]) {

stary[i]+=1+Math.random()*3;

if (stary[i]<shigh+sdown) {

star[i].style.top=stary[i]+"px";

starx[i]+=(i%5-2)/5;

star[i].style.left=starx[i]+"px";

}

else {

star[i].style.visibility="hidden";

starv[i]=0;

return;

}

}

else {

tinyv[i]=50;

tiny[i].style.top=(tinyy[i]=stary[i])+"px";

tiny[i].style.left=(tinyx[i]=starx[i])+"px";

tiny[i].style.width="2px";

tiny[i].style.height="2px";

star[i].style.visibility="hidden";

tiny[i].style.visibility="visible"

}

}

function update_tiny(i) {

if (--tinyv[i]==25) {

tiny[i].style.width="1px";

tiny[i].style.height="1px";

}

if (tinyv[i]) {

tinyy[i]+=1+Math.random()*3;

if (tinyy[i]<shigh+sdown) {

tiny[i].style.top=tinyy[i]+"px";

tinyx[i]+=(i%5-2)/5;

tiny[i].style.left=tinyx[i]+"px";

}

else {

tiny[i].style.visibility="hidden";

tinyv[i]=0;

return;

}

}

else tiny[i].style.visibility="hidden";

}

document.onmousemove=mouse;

function mouse(e) {

set_scroll();

y=(e)?e.pageY:event.y+sdown;

x=(e)?e.pageX:event.x+sleft;

}

function set_scroll() {

if (typeof(self.pageYOffset)=="number") {

sdown=self.pageYOffset;

sleft=self.pageXOffset;

}

else if (document.body.scrollTop || document.body.scrollLeft) {

sdown=document.body.scrollTop;

sleft=document.body.scrollLeft;

}

else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {

sleft=document.documentElement.scrollLeft;

sdown=document.documentElement.scrollTop;

}

else {

sdown=0;

sleft=0;

}

}

window.onresize=set_width;

function set_width() {

if (typeof(self.innerWidth)=="number") {

swide=self.innerWidth;

shigh=self.innerHeight;

}

else if (document.documentElement && document.documentElement.clientWidth) {

swide=document.documentElement.clientWidth;

shigh=document.documentElement.clientHeight;

}

else if (document.body.clientWidth) {

swide=document.body.clientWidth;

shigh=document.body.clientHeight;

}

}

function createDiv(height, width) {

var div=document.createElement("div");

div.style.position="absolute";

div.style.height=height+"px";

div.style.width=width+"px";

div.style.overflow="hidden";

div.style.backgroundColor=colour;

return (div);

}



function enviarFormulario() {



	document.ingreso.submit() 

}

// ]]>

</script>

</head>



<body id="page-top" class="index">



	<!-- Navigation -->

	<nav class="navbar navbar-default navbar-fixed-top">

		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->

			<div class="navbar-header page-scroll">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

					<span class="sr-only">Toggle navigation</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

				</button>

				<a class="navbar-brand page-scroll" href="#page-top"><center><img class="img-responsive" src="tema_cliente/img/iconolo.png" width="50"></center>ORIGINALOOK</a>

			</div>



			<!-- Collect the nav links, forms, and other content for toggling -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">

					<li class="hidden">

						<a href="#page-top"></a>

					</li>

					<li>

						<a class="page-scroll" href="#services">Nosotros</a>

					</li>

					<li>

						<a class="page-scroll" href="#portfolio">Portafolio</a>

					</li>

					<li>

						<a class="page-scroll" href="#about">Servicios</a>

					</li>

					<li>

						<a class="page-scroll" href="#team">Como Registrarse</a>

					</li>

					<li>

						<a class="page-scroll" href="#contact">Contacto</a>

					</li>

				</ul>

			</div>

			<!-- /.navbar-collapse -->

		</div>

		<!-- /.container-fluid -->

	</nav>



	<!-- Header -->

	<header>

		<div class="container">

			<div class="intro-text">

			  <div class="intro-lead-in">Bienvenidos A Originalook</div>

				<div class="intro-heading">La Mejor Forma De Ofrecer Servicios De Bienestar y Belleza</div>

				 <a style="font-size: 20px;"  href="#"> <div data-toggle="modal" data-target="#myModal">Registrate Ya!</div></a> 

				 <p>Descargame ya en</p>

			  <center><a href="#"><img class="img-responsive" src="tema_cliente/img/android.png" width="130"></a></center>

			</div>

		   

			 <div class="arrow">

					<a href="#services" class="scroll"><img src="tema_cliente/img/arrow.png" alt=" " /></a>

				</div>

		</div>

	</header>





<!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">

	<div class="modal-dialog">

	

	  <!-- Modal content-->

	  <div class="modal-content">

		<div class="modal-header">

		  <button type="button" class="close" data-dismiss="modal">&times;</button>

		 <center> <h4 class="modal-title">Bienvenidos a nuestro ingreso de usuario</h4></center>

		</div>

		<div class="modal-body">

			 <div class="modal-body">

			  <div class="row">

				  <div class="col-xs-6">

					  <div class="well">

						  <form name="ingreso" id="ingreso" method="post" action="verificarLogin">.

								<!-- Mete esto para enviar un formulario -->

								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<!-- Hasta aqui -->

							  <div class="form-group">

								  <label for="username" class="control-label">Usuario</label>

								  <input type="text" class="form-control" id="username" name="usuario" required="" title="Please enter you username" placeholder="original.look">

							  </div>

							  <div class="form-group">

								  <label for="password" class="control-label">Clave</label>

								  <input type="password" class="form-control" id="password" name="clave" required="" title="Please enter your password" placeholder="ingrese su clave">

							  </div>

							  <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>

							  <div class="checkbox">

								  <label>

									  <input type="checkbox" name="remember" id="remember"> Recordar ingreso

								  </label>

								 

							  </div>

							  <button type="submit" class="btn btn-success btn-block" onclick="enviarFormulario()">Ingresar</button>

							  <a href="/forgot/" class="btn btn-default btn-block">Olvide mi contraseña</a>

						  </form>

					  </div>

				  </div>

				  <div class="col-xs-6">

					  <p class="lead">Registrate <span class="text-success">Gratis</span></p>

					  <ul class="list-unstyled" style="line-height: 2">

						  <li><span class="fa fa-check text-success"></span> Encuentra Tu estilista</li>

						  <li><span class="fa fa-check text-success"></span> Aparta tu cita</li>

						  <li><span class="fa fa-check text-success"></span> Elije tus categorias</li>

						  <li><span class="fa fa-check text-success"></span> Facil de usar</li>

						  <li><span class="fa fa-check text-success"></span> Obten tus puntos y redimelos <small>(solo aplica para servicios usados en la aplicación)</small></li>

						  <li><a style="color: #521646;" href="#"><u>Leer pólizas</u></a></li>

					  </ul>

					   <p><a href="registroCliente" class="btn btn-info btn-block">Registrarse como Cliente Ahora!</a></p>

				  </div>

			  </div>

		  </div>

		</div>

		<div class="modal-footer">

		  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

		</div>

	  </div>

	  

	</div>

  </div>







	<!-- Nosotros Section -->

	<section class="services" id="services">

		<div class="container">

		<div class="row">

				<div class="col-lg-12 text-center">

					<h2 class="section-heading">Que es Originalook</h2>

					<h3 class="section-subheading text-muted">Es una aplicación que nace de la necesidad de los usuarios de buscar la forma mas sencilla de encontrar asesores que se encarguen de la parte de bienestar y belleza de las personas brindandoles una cantidad de servicios relacionados con este sector y dandole opcion a los clientes de registrarse con el fin de que estos puedan ofrecer sus servicios al publico.</h3>

				</div>

			</div>

			<div class="services-top">

					<div class="col-md-12">

					<center><img class="img-responsive" src="tema_cliente/img/nosotro.png"></center>

					</div>

				   

					<div class="clearfix"></div>

			</div>

				<div class="col-md-3 col-sm-3 services-grid services-grid1">

					 <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>

					<h4>Portable</h4>

					<p>Originalook la pueden encontrar disponible en web y en movil para brindandole facilidad a nuestros usuarios de llevarla con ella siempre. </p>

				</div>

				<div class="col-md-3 col-sm-3 services-grid services-grid2">

			

					<span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>

					<h4>Facil de usar</h4>

					<p>Originalook es una aplicación con una interfaz sencilla para evitar que los clientes y usuarios se les dificulte pedir o ofrecer servicios.</p>

				</div>

				<div class="col-md-3 col-sm-3 services-grid services-grid3">

					 <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>

					<h4>Confiable</h4>

					<p>Originalook se encarga de brindarle toda la información necesaria a los usuarios para que puedan verificar a quien le piden servicios.</p>

				</div>

				<div class="col-md-3 col-sm-3 services-grid services-grid4">

					<span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>

					<h4>Eficiente</h4>

					<p>Originalook es una plataforma que cumple con los estándares de calidad y estándares de seguridad para brindar un excelente servicio. </p>

				</div>

				

				<div class="clearfix"></div>

			</div>

	</section>





	<!-- Portfolio Grid Section -->

	<section id="portfolio" class="bg-light-gray">

		<div class="container">

			<div class="row">

				<div class="col-lg-12 text-center">

					<h2 style="color: #e8c23d;" class="section-heading">Portfolio</h2>

					<h3 style="color: white;" class="section-subheading text-muted">Disfruta de Nuestro Contenido.</h3>

				</div>

			</div>

			<div class="row">

				<div class="col-md-4 col-sm-6 portfolio-item">

					<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">

						<div class="portfolio-hover">

							<div class="portfolio-hover-content">

								<i class="fa fa-plus fa-3x"></i>

							</div>

						</div>

						<img src="tema_cliente/img/portfolio/roundicons.png" class="img-responsive" alt="">

					</a>

					<div class="portfolio-caption">

						<h4 style="color: #e8c23d;">Cortes de pelo</h4>

						<p style="color: white;" class="text-muted">Caballeros y Damas</p>

					</div>

				</div>

				<div class="col-md-4 col-sm-6 portfolio-item">

					<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">

						<div class="portfolio-hover">

							<div class="portfolio-hover-content">

								<i class="fa fa-plus fa-3x"></i>

							</div>

						</div>

						<img src="tema_cliente/img/portfolio/startup-framework.png" class="img-responsive" alt="">

					</a>

					<div class="portfolio-caption">

						<h4 style="color: #e8c23d;">Maquillaje de cejas</h4>

						<p style="color: white;" class="text-muted">Diseño de cejas</p>

					</div>

				</div>

				<div class="col-md-4 col-sm-6 portfolio-item">

					<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">

						<div class="portfolio-hover">

							<div class="portfolio-hover-content">

								<i class="fa fa-plus fa-3x"></i>

							</div>

						</div>

						<img src="tema_cliente/img/portfolio/treehouse.png" class="img-responsive" alt="">

					</a>

					<div class="portfolio-caption">

						<h4 style="color: #e8c23d;">Manicure</h4>

						<p style="color: white;" class="text-muted">Diseños De uñas</p>

					</div>

				</div>

				<div class="col-md-4 col-sm-6 portfolio-item">

					<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">

						<div class="portfolio-hover">

							<div class="portfolio-hover-content">

								<i class="fa fa-plus fa-3x"></i>

							</div>

						</div>

						<img src="tema_cliente/img/portfolio/golden.png" class="img-responsive" alt="">

					</a>

					<div class="portfolio-caption">

						<h4 style="color: #e8c23d;">Mascarillas</h4>

						<p style="color: white;" class="text-muted">Mascarillas exfoliantes para mujeres y hombres</p>

					</div>

				</div>

				<div class="col-md-4 col-sm-6 portfolio-item">

					<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">

						<div class="portfolio-hover">

							<div class="portfolio-hover-content">

								<i class="fa fa-plus fa-3x"></i>

							</div>

						</div>

						<img src="tema_cliente/img/portfolio/escape.png" class="img-responsive" alt="">

					</a>

					<div class="portfolio-caption">

						<h4 style="color: #e8c23d;">Depilación</h4>

						<p style="color: white;" class="text-muted">Depilación con cera para mujeres y hombres a gusto</p>

					</div>

				</div>

				<div class="col-md-4 col-sm-6 portfolio-item">

					<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">

						<div class="portfolio-hover">

							<div class="portfolio-hover-content">

								<i class="fa fa-plus fa-3x"></i>

							</div>

						</div>

						<img src="tema_cliente/img/portfolio/dreams.png" class="img-responsive" alt="">

					</a>

					<div class="portfolio-caption">

						<h4 style="color: #e8c23d;">Arreglos para fiestas</h4>

						<p style="color: white;" class="text-muted">Especialista en arreglos para noche de fiesta</p>

					</div>

				</div>

			</div>

		</div>

	</section>



	<!-- About Section -->

	<section id="about">

		<div class="container">

			<div class="row">

				<div class="col-lg-12 text-center">

					<h2 class="section-heading">Servicios</h2>

					<h3 class="section-subheading text-muted">Originalook trae los mejores servicios para ti.</h3>

				</div>

			</div>

			<div class="row text-center">

				<div class="col-md-4">

					<span class="fa-stack fa-4x">

						<i class="fa fa-circle fa-stack-2x text-primary"></i>

						<i class="fa fa-eye-cart fa-stack-1x fa-eye"></i>

					</span>

					<h4 class="service-heading">Belleza</h4>

					<p class="text-muted">Tan facil y sencillo como exponer o pedir tus servicios de belleza en nuestra aplicación para verte o dejar a alguien a gusto con su servicio.</p>

				</div>

				<div class="col-md-4">

					<span class="fa-stack fa-4x">

						<i class="fa fa-circle fa-stack-2x text-primary"></i>

						<i class="fa fa-eye fa-stack-1x fa-eye"></i>

					</span>

					<h4 class="service-heading">Asesoramiento</h4>

					<p class="text-muted">Cuentas con un manual el cual obtendra una series de preguntas con sus respectivas respuestas para que aprendas a usar la aplicación facilmente.</p>

				</div>

				<div class="col-md-4">

					<span class="fa-stack fa-4x">

						<i class="fa fa-circle fa-stack-2x text-primary"></i>

						<i class="fa fa-eye fa-stack-1x fa-eye"></i>

					</span>

					<h4 class="service-heading">Citas</h4>

					<p class="text-muted">Podras reservar tus citas para que evites esperar horas y horas para que te puedan atender en tu salon de belleza.</p>

				</div>

			</div>

		</div>

	</section>



	<!-- Team Section -->

	<section id="team" class="bg-light-gray">

		<div class="container">

			<div class="row">

				<div class="col-lg-12 text-center">

					<h2 style="color: white;" class="section-heading">Registro Facil</h2>

					<h3 style="color: white;" class="section-subheading text-muted">Acontinuación daremos los pasos para que tengas un registro exitoso.</h3>

				</div>

			</div>

			<div class="row">

				<div class="col-sm-3">       

						<img src="tema_cliente/img/team/1.png" class="img-responsive img-circle" alt="">

					   <center> <p style="color: white;">Dar click en el enlace que aparece en la pagina principal <strong>Registrate ya!</strong></p></center>

				</div>

				<div class="col-sm-3">       

						<img src="tema_cliente/img/team/2.png" class="img-responsive img-circle" alt="">

					 <center>   <p style="color: white;">Elegir si es cliente o usuario y llenar el formulario que aparecera en pantalla y dar click en <strong>Registrar!</strong></p></center>

				</div>

				<div class="col-sm-3">       

						<img src="tema_cliente/img/team/3.png" class="img-responsive img-circle" alt="">

					  <center>  <p style="color: white;">Interactua con el panel administrativo ingresando a los diferentes links</p></center>

				</div>

			   <div class="col-sm-3">       

						<img src="tema_cliente/img/team/4.png" class="img-responsive img-circle" alt="">

					  <center>  <p style="color: white;">Una vez activado podras exponer tus servicios para que todos los vean</p></center>

				</div>

			</div>

			<div class="row">

				<div class="col-lg-8 col-lg-offset-2 text-center">

					<p style="color: white;" class="large text-muted">Tan facil y sencillo que es registrarse que esperas tu para hacerlo?</p>

				</div>

			</div>

		</div>

	</section>



	<!-- Clients Aside -->

	<aside class="clients">

		<div class="container">

			<div class="row">

				<div class="col-md-3 col-sm-6">

					<a href="#">

						<img src="tema_cliente/img/logos/envato.jpg" class="img-responsive img-centered" alt="">

					</a>

				</div>

				<div class="col-md-3 col-sm-6">

					<a href="#">

						<img src="tema_cliente/img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">

					</a>

				</div>

				<div class="col-md-3 col-sm-6">

					<a href="#">

						<img src="tema_cliente/img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">

					</a>

				</div>

				<div class="col-md-3 col-sm-6">

					<a href="#">

						<img src="tema_cliente/img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">

					</a>

				</div>

			</div>

		</div>

	</aside>



	<section id="contact">

		<div class="container">

			<div class="row">

				<div class="col-lg-12 text-center">

					<h2 class="section-heading">Contácto</h2>

					<h3 style="color: white;" class="section-subheading text-muted">Escribenos y responderemos a tu solicitud.</h3>

				</div>

			</div>

			<div class="row">

				<div class="col-lg-12">

					<form name="sentMessage" id="contactForm" novalidate>

						<div class="row">

							<div class="col-md-6">

								<div class="form-group">

									<input type="text" class="form-control" placeholder="Ingresar Nombre *" id="name" required data-validation-required-message="Ingresar Nombre.">

									<p class="help-block text-danger"></p>

								</div>

								<div class="form-group">

									<input type="email" class="form-control" placeholder="Ingresar Email *" id="email" required data-validation-required-message="Ingresar E-mail.">

									<p class="help-block text-danger"></p>

								</div>

								<div class="form-group">

									<input type="tel" class="form-control" placeholder="Ingresar Telefono *" id="phone" required data-validation-required-message="Ingresar Telefono.">

									<p class="help-block text-danger"></p>

								</div>

							</div>

							<div class="col-md-6">

								<div class="form-group">

									<textarea class="form-control" placeholder="Escriba Su Mensaje *" id="message" required data-validation-required-message="Escriba Su Mensaje."></textarea>

									<p class="help-block text-danger"></p>

								</div>

							</div>

							<div class="clearfix"></div>

							<div class="col-lg-12 text-center">

								<div id="success"></div>

								<button type="submit" class="btn btn-xl">Enviar Mensaje</button>

							</div>

						</div>

					</form>

				</div>

			</div>

		</div>

	</section>



	<footer>

		<div class="container">

			<div class="row">

				<div class="col-md-4">

					<span class="copyright">Originalook</span>



				</div>

				<div class="col-md-4">

					<ul class="list-inline social-buttons">

						<li><a href="#"><i class="fa fa-twitter"></i></a>

						</li>

						<li><a href="#"><i class="fa fa-facebook"></i></a>

						</li>

						<li><a href="#"><i class="fa fa-linkedin"></i></a>

						</li>

					</ul>

				</div>

				<div class="col-md-4">

					<ul class="list-inline quicklinks">

						<li><a style="color: black;" href="#">Ver mas</a>

						</li>

						<li><a style="color: black;" href="#">Politicas</a>

						</li>

					</ul>

				</div>

			</div>

		</div>

	</footer>



	<!-- Portfolio Modals -->

	<!-- Use the modals below to showcase details about your portfolio projects! -->



	<!-- Portfolio Modal 1 -->

	<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-content">

			<div class="close-modal" data-dismiss="modal">

				<div class="lr">

					<div class="rl">

					</div>

				</div>

			</div>

			<div class="container">

				<div class="row">

					<div class="col-lg-8 col-lg-offset-2">

						<div class="modal-body">

							<!-- Project Details Go Here -->

							<h2>Cortes De Pelo</h2>

							<p class="item-intro text-muted">Si buscas cambiar tu corte de cabello este esta es tu solución.</p>

							<img class="img-responsive" src="tema_cliente/img/portfolio/roundicons-free.png" alt="">

							<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum !</p>

							<p>

								<strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ?</strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>

							<ul class="list-inline">

								<li>Lorem ipsum </li>

								<li>Lorem ipsum </li>

								<li>Lorem ipsum Lorem ipsum n</li>

							</ul>

							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



	<!-- Portfolio Modal 2 -->

	<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-content">

			<div class="close-modal" data-dismiss="modal">

				<div class="lr">

					<div class="rl">

					</div>

				</div>

			</div>

			<div class="container">

				<div class="row">

					<div class="col-lg-8 col-lg-offset-2">

						<div class="modal-body">

							<h2>Maquillaje</h2>

							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

							<img class="img-responsive" src="tema_cliente/img/portfolio/startup-framework-preview.png" alt="">

							<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum !</p>

							<p>

								<strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ?</strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>

							<ul class="list-inline">

								<li>Lorem ipsum </li>

								<li>Lorem ipsum </li>

								<li>Lorem ipsum Lorem ipsum n</li>

							</ul>

							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



	<!-- Portfolio Modal 3 -->

	<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-content">

			<div class="close-modal" data-dismiss="modal">

				<div class="lr">

					<div class="rl">

					</div>

				</div>

			</div>

			<div class="container">

				<div class="row">

					<div class="col-lg-8 col-lg-offset-2">

						<div class="modal-body">

							<!-- Project Details Go Here -->

							<h2>Manicure</h2>

							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

							<img class="img-responsive" src="tema_cliente/img/portfolio/treehouse-preview.png" alt="">

							<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum !</p>

							<p>

								<strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ?</strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>

							<ul class="list-inline">

								<li>Lorem ipsum </li>

								<li>Lorem ipsum </li>

								<li>Lorem ipsum Lorem ipsum n</li>

							</ul>

							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



	<!-- Portfolio Modal 4 -->

	<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-content">

			<div class="close-modal" data-dismiss="modal">

				<div class="lr">

					<div class="rl">

					</div>

				</div>

			</div>

			<div class="container">

				<div class="row">

					<div class="col-lg-8 col-lg-offset-2">

						<div class="modal-body">

							<!-- Project Details Go Here -->

							<h2>Mascarillas</h2>

							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

							<img class="img-responsive" src="tema_cliente/img/portfolio/golden-preview.png" alt="">

							<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum !</p>

							<p>

								<strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ?</strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>

							<ul class="list-inline">

								<li>Lorem ipsum </li>

								<li>Lorem ipsum </li>

								<li>Lorem ipsum Lorem ipsum n</li>

							</ul>

							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



	<!-- Portfolio Modal 5 -->

	<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-content">

			<div class="close-modal" data-dismiss="modal">

				<div class="lr">

					<div class="rl">

					</div>

				</div>

			</div>

			<div class="container">

				<div class="row">

					<div class="col-lg-8 col-lg-offset-2">

						<div class="modal-body">

							<!-- Project Details Go Here -->

							<h2>Depilación</h2>

							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

							<img class="img-responsive" src="tema_cliente/img/portfolio/escape-preview.png" alt="">

							<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum !</p>

							<p>

								<strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ?</strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>

							<ul class="list-inline">

								<li>Lorem ipsum </li>

								<li>Lorem ipsum </li>

								<li>Lorem ipsum Lorem ipsum n</li>

							</ul>

							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>









	<!-- Portfolio Modal 6 -->

	<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-content">

			<div class="close-modal" data-dismiss="modal">

				<div class="lr">

					<div class="rl">

					</div>

				</div>

			</div>

			<div class="container">

				<div class="row">

					<div class="col-lg-8 col-lg-offset-2">

						<div class="modal-body">

							<!-- Project Details Go Here -->

							<h2>Arreglos</h2>

							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

							<img class="img-responsive" src="tema_cliente/img/portfolio/dreams-preview.png" alt="">

							<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum !</p>

							<p>

								<strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ?</strong>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>

							<ul class="list-inline">

								<li>Lorem ipsum </li>

								<li>Lorem ipsum </li>

								<li>Lorem ipsum Lorem ipsum n</li>

							</ul>

							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

  <audio src="{{asset('tema_cliente/micancion.mp3')}}" autoplay="true" loop="true"></audio>

	<!-- jQuery -->

	<script src="{{asset('tema_cliente/js/jquery.js')}}"></script>



	<!-- Bootstrap Core JavaScript -->

	<script src="{{asset('tema_cliente/js/bootstrap.min.js')}}"></script>



	<!-- Plugin JavaScript -->

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	<script src="{{asset('tema_cliente/js/classie.js')}}"></script>

	<script src="{{asset('tema_cliente/js/cbpAnimatedHeader.js')}}"></script>



	<!-- Contact Form JavaScript -->

	<script src="{{asset('tema_cliente/js/jqBootstrapValidation.js')}}"></script>

	<script src="{{asset('tema_cliente/js/contact_me.js')}}"></script>



	<!-- Custom Theme JavaScript -->

	<script src="{{asset('tema_cliente/js/agency.js')}}"></script>



</body>



</html>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('tema_cliente/v2.0/css/style2.css')}}" type="text/css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<!-- Font Awesome CDN -->
	<script src="https://use.fontawesome.com/025d1f53df.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

</head>
<body>

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex flex-column flex-sm-row"><a href="/inicio"><img src="{{asset('tema_cliente/v2.0/img/logotipo.png')}}" class="img-fluid" alt="logo"></a></div>
			<div class="col-md-6 text-right">

				<ul class="social-header list-inline text-xs-right">
					<li class="list-inline-item">
						<a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                      </span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                      </span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                      </span>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>
</header>
<!-- navbar -->
<div class="container-fluid navbar-inverse bg-morado">
	<nav class="navbar navbar-toggleable-md container">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="wellive">Wellive</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="inicio">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="portafolio">Portafolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="servicios">Pasos de registro</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contacto">Contacto</a>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
</div>
<!--fin  navbar -->

<!-- slider -->
<div class="container-fluid fondo">
	<div class="container d-flex flex-column justify-content-center h-100 align-items-center">
		<h1 class="cover-heading">Welcome To Wellive</h1>
		<p>La aplicación que te brinda los mejores servicios de bienestar y belleza en barranquilla
		</p>
		<div>
			<a href="#" class="btn btn-primary">Descarga la app</a>
			<a href="#" class="btn btn-primary" data-toggle="modal" data-target=".ingresar-modal-sm">Ingresar</a>
		</div>
	</div>
</div>
<!-- fin slider -->

<!-- seccion -->
<div class="container py-5">
	<div class="row align-items-center text-right">
		<div class="col-md-6"><h2>WELLIVE</h2>
			<p><b>La aplicación de moda</b></p>
			<p>Está aplicación nace de la necesidad de los usuarios de buscar formas sencillas de encontrar asesores que se encarguen de la parte de su bienestar y belleza brindandoles una cantidad de servicios relacionados con este sector y dandole opcion a los clientes de registrarse con el fin de que estos puedan ofrecer sus servicios al publico.</p>
		</div>
		<div class="col-md-6">
			<img src="{{asset('tema_cliente/v2.0/img/iconolo.png')}}" class="img-fluid" alt="">
		</div>
	</div>
</div>
<!-- fin seccion -->


<!-- seccion 2 -->
<div class="container-fluid py-5">
	<div class="container">
		<div class="row ">
			<div class="col-sm-6 col-md-6 col-lg-3 ">
				<i class="fa fa-modx fa-3x  awesomemorado" aria-hidden="true"></i>
				<h2>Portable</h2>
				<p> Wellive la pueden encontrar disponible en web y movil para brindarle facilidad a nuestros usuarios de llevarla con ella siempre.</p>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3">
				<i class="fa fa-modx fa-3x d-flex flex-column align-items-center awesomeamarillo" aria-hidden="true"></i>
				<h2>Confiable</h2>
				<p> Wellive se encarga de brindarle toda la información necesaria a los usuarios para que puedan verificar a quien le piden servicios.</p>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3">
				<i class="fa fa-modx fa-3x awesomeamarillo" aria-hidden="true"></i>
				<h2>Eficiente</h2>
				<p> Wellive es una plataforma que cumple con los estándares de calidad y estándares de seguridad para brindar un excelente servicio.</p>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3">
				<i class="fa fa-modx fa-3x d-flex flex-column align-items-center awesomemorado" aria-hidden="true"></i>
				<h2>Innovador</h2>
				<p> Wellive es el unico servicio profesional de belleza que brinda nuevas estrategias para satisfacer a nuestros clientes .</p>
			</div>
		</div>
	</div>
</div>
<!-- fin seccion 2 -->

<!-- seccion 3 -->
<div class="container-fluid py-5 bg-fondosection2 text-center text-white">
	<div>
		<h2>Los mejores servicios expuestos en una sola aplicación</h2>
		<div class="display-4">
			<i class="fa fa-cog fa-spin pr-3"></i>
		</div>
	</div>
</div>
<!-- fin seccion 3 -->

<!-- seccion 4 -->
<div class="container py-5">
	<h2 class="text-center">Tan facil como registrarte y pedir tu servicio</h2>
	<p class="text-center lead">No lo dudes y conviertete en un usuario</p>
	<div class="row align-items-center text-right">
		<div class="col-md-6">
			<img src="{{asset('tema_cliente/v2.0/img/seccion4.png')}}" class="img-fluid" alt="imagen de seccio">
		</div>
		<div class="col-md-6"><h2>Registrarte en la web</h2>
			<p><b>La aplicación de moda</b></p>
			<p>Ingresa todos tus datos personales si eres profesional o tienes tu empresa y expon todos los servicios que ofreces.</p>
		</div>
	</div>

	<div class="row align-items-center text-right">
		<div class="col-md-6 "><h2>Pide tu servicio</h2>
			<p><b>La aplicación de moda</b></p>
			<p>Ingresa desde cualquier movil y pide tu cita con cualquier empresa o profesional registrado en nuestra plataforma.</p>
		</div>
		<div class="col-md-6">
			<img src="{{asset('tema_cliente/v2.0/img/seccion4-2.png')}}" class="img-fluid" alt="imagen de seccion4">
		</div>
	</div>
</div>
<!-- fin seccion 4 -->

<!-- seccion 5 -->
<footer class="container-fluid bg-morado text-center text-white py-3">
	<p>@Derechos reservasos a Wellive</p>
	<i class="fa fa-angle-up" aria-hidden="true"></i>

</footer>
<!-- fin seccion 5 -->

<!-- seccion 6 -->
<!-- fin seccion 6 -->

<!-- seccion 6 -->
<!-- fin seccion 6 -->

<div class="modal fade ingresar-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ingresar a la plataforma</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="verificarLogin" method="post">
			<div class="col-sm-12">
				<div class="row">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="col-sm-12 form-group" align="center">
						<label>Usuario</label>
						<input type="text" name="usuario" class="form-control" required>
					</div>
					<div class="col-sm-12 form-group" align="center">
						<label>Clave</label>
						<input type="password" name="clave" class="form-control" required>
					</div>
					  <div class="col-sm-6 form-group">
						<button class="btn btn-primary">Ingresar</button>
					</div> 
				</div>    
			</div>     
		</form>
      </div>
    </div>
  </div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
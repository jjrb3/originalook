<!DOCTYPE html>

<html lang="en">



    <head>



        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro Clientes</title>



        <!-- CSS -->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')}}">

        <link rel="stylesheet" href="{{asset('tema_cliente/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{asset('tema_cliente/fonts/font-awesome.min.css')}}">

		<link rel="stylesheet" href="{{asset('tema_cliente/css/form-elements.css')}}">

        <link rel="stylesheet" href="{{asset('tema_cliente/css/style2.css')}}">





        <!-- Favicon and touch icons -->

        <link rel="shortcut icon" href="{{asset('tema_cliente/ico/favicon.png')}}">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('tema_cliente/ico/apple-touch-icon-144-precomposed.png')}}">

        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('tema_cliente/ico/apple-touch-icon-114-precomposed.png')}}">

        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('tema_cliente/ico/apple-touch-icon-72-precomposed.png')}}">

        <link rel="apple-touch-icon-precomposed" href="{{asset('tema_cliente/ico/apple-touch-icon-57-precomposed.png')}}">



    </head>



    <body>



		<!-- Top menu -->

	<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">

			<div class="container">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">

						<span class="sr-only">Toggle navigation</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

					</button>

					<a class="" href="http://stids.net/originalook/"><img src="tema_cliente/img/iconolo.png" width="150"></a>

				</div>

			

				<div class="collapse navbar-collapse" id="top-navbar-1">

					<ul class="nav navbar-nav navbar-right">

						<li>

							<span class="li-text">

								Click Aquí Para Regresar A La Pagina De

							</span> 

							<a href="http://stids.net/originalook/"><strong>INICIO</strong></a> 

							<span class="li-text">

								

							</span> 

							

						</li>

					</ul>

				</div>

			</div>

		</nav> 

   



        <!-- Top content -->

        <div class="top-content">

            <div class="container">



                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">

                    	<form role="form" action="registrarCliente" method="post" class="f1">



                            <!-- Mete esto para enviar un formulario -->

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <!-- Hasta aqui -->





                            <h3>Registro De Profesionales</h3>

                    		<p>Si quieres hacer parte de nuestro gremio registrate!!</p>

                    		<div class="f1-steps">

                    			<div class="f1-progress">

                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>

                    			</div>

                    			<div class="f1-step active">

                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>

                    				<p>Datos Personales</p>

                    			</div>

                    			<div class="f1-step">

                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>

                    				<p>Datos De Registro </p>

                    			</div>

                    		    <div class="f1-step">

                    				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>

                    				<p>Paso Final</p>

                    			</div>



                    		</div>

                    		

                    		<fieldset>

                    		    <h4>  Ingresar Datos</h4>

                    			<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Primer Nombre</label>

                                    <input type="text" name="primerNombre" placeholder="Primer Nombre..." class="f1-first-name form-control" id="f1-first-name">

                                </div>

                                <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">Segundo Nombre</label>

                                    <input type="text" name="segundoNombre" placeholder="Segundo Nombre..." class="f1-last-name form-control" id="f1-last-name">

                                </div>

                                 <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">Primer Apellido</label>

                                    <input type="text" name="primerApellido" placeholder="Primer Apellido..." class="f1-last-name form-control" id="f1-last-name">

                                </div>

                                 <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">Segundo Apellido</label>

                                    <input type="text" name="segundoApellido" placeholder="Segundo Apellido..." class="f1-last-name form-control" id="f1-last-name">

                                </div>

                                <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">E-mail</label>

                                    <input type="text" name="email" placeholder="E-mail..." class="f1-last-name form-control" id="f1-last-name">

                                </div>

                                <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">E-mail Alternativo</label>

                                    <input type="text" name="emailAlternativo" placeholder="E-mail Alternativo..." class="f1-last-name form-control" id="f1-last-name">

                                </div>

                                 <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">Celular</label>

                                    <input type="text" name="celular" placeholder="Celular..." class="f1-last-name form-control" id="f1-last-name">

                                </div>



                                <div class="f1-buttons">

                                    <button type="button" class="btn btn-next">Siguiente</button>

                                </div>

                            </fieldset>



                            <fieldset>

                                <h4>Ingresar Datos</h4>

                               

                                <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">Telefono Fijo</label>

                                    <input type="text" name="telefono" placeholder="Telefono Fijo..." class="f1-last-name form-control" id="f1-last-name">

                                </div>

                                 <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">Usuario</label>

                                    <input type="text" name="usuario" placeholder="Usuario..." class="f1-last-name form-control" id="f1-last-name">

                                </div>

                                <div class="form-group">

                                    <label class="sr-only" for="f1-repeat-password">Contraseña</label>

                                    <input type="password" name="clave" placeholder="Contraseña..." class="f1-repeat-password form-control" id="f1-repeat-password">

                                </div>

                                 <div class="form-group">

                                    <label class="sr-only" for="f1-repeat-password">Dirección</label>

                                    <input type="text" name="direccion" placeholder="Dirección..." class="f1-repeat-password form-control" id="f1-repeat-password">

                                </div>

                                 <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">Fecha De Nacimiento</label>

                                    Fecha De Nacimiento

                                    <input type="date" name="nacimiento" placeholder="fecha de nacimiento..." class="f1-last-name form-control" id="f1-last-name">

                                </div>



                                <div class="f1-buttons">

                                    <button type="button" class="btn btn-previous">Atras</button>

                                    <button type="button" class="btn btn-next">Siguiente</button>

                                </div>

                            </fieldset>



                            <fieldset>

                                <h4>Paso Final</h4>

                                   <div class="form-group">

                                    <label class="sr-only" for="f1-twitter">Tipo De Identificación</label>

                                    <select  name="tipoIdentificacion" class="form-control " >

                                        @foreach($tipoIdentificacion as $lista)

                                            <option value="{{$lista['id']}}">{{$lista['nombre']}}</option>

                                        @endforeach 

                                    </select>

                                </div>

                                  <div class="form-group">

                                    <label class="sr-only" for="f1-last-name">N° Identificación</label>

                                    <input type="text" name="identificacion" placeholder="N° Identificación..." class="f1-last-name form-control" id="f1-last-name">

                                </div>

                    



                                <div class="form-group">

                                    <label class="sr-only" for="f1-google-plus">Genero</label>

                                     <select  name="genero" class="form-control " >

                                    <option>Genero</option>

                                    <option>Masculino</option>

                                    <option>Femenino</option>

                                 

                                </select>

                                </div>

                                <div class="form-group">

                                    <label class="sr-only" for="f1-google-plus">Marca De Dispositivo</label>

                                     <select  name="marca" class="form-control " >

                                    <option>Marca De Dispositivo</option>

                                    <option>IOS</option>

                                    <option>Android</option>

                                 

                                </select>

                                </div>

                                <div class="form-group">

                                    <label class="sr-only" for="f1-google-plus">Pais</label>

                                     <select  name="pais" class="form-control " >

                                    <option>Pais</option>

                                    <option>Colombia</option>

                                    <option>Argentina</option>

                                 

                                </select>

                                </div>

                                <div class="form-group">

                                    <label class="sr-only" for="f1-google-plus">Ciudad</label>

                                     <select  name="ciudad" class="form-control " >

                                    <option>Ciudad</option>

                                    <option>Barranquilla</option>

                                    <option>Bunos Aires</option>

                                 

                                </select>

                                </div>

                                <div class="form-group">

                                    <label class="sr-only" for="f1-google-plus">Rol</label>

                                     <select  name="rol" class="form-control " disabled>

                                    <option value="1">Rol Profesional</option>

                                 

                                </select>

                                </div>

                                <div class="f1-buttons">

                                    <button type="button" class="btn btn-previous">Atras</button>

                                    <button type="submit" class="btn btn-submit">Registrarse</button>

                                </div>

                            </fieldset>

                    	

                    	</form>

                    </div>

                </div>

                    

            </div>

        </div>





        <!-- Javascript -->

        <script src="{{asset('tema_cliente/js/jquery-1.11.1.min.js')}}"></script>

        <script src="{{asset('tema_cliente/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('tema_cliente/js/jquery.backstretch.min.js')}}"></script>

        <script src="{{asset('tema_cliente/js/retina-1.1.0.min.js')}}"></script>

        <script src="{{asset('tema_cliente/js/scripts.js')}}"></script>

        

        <!--[if lt IE 10]>

            <script src="assets/js/placeholder.js"></script>

        <![endif]-->



    </body>



</html>
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
          <div class="col-md-6 d-flex flex-column flex-sm-row"><a href="index.html"><img src="{{asset('tema_cliente/v2.0/img/logotipo.png')}}" class="img-fluid" alt="logo"></a></div>
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
        <li class="nav-item">
        <a class="nav-link" href="inicio">Inicio</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="portafolio">Portafolio</a>
        </li>
        <li class="nav-item active">
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
    <div class="container-fluid fondo2">
        <div class="container d-flex flex-column justify-content-center h-100 align-items-center">
            <h1 class="cover-heading">Como Registrarme En Wellive</h1>
            <p>Buscando lo mejor para nuestros usuarios 
            </p>
            <div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Registrarse</a> 
            </div>
        </div>
    </div>
    <!-- fin slider -->

    <!-- Large modal REGISTRO PROFESIONAL-->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bienvenido al registro de professional</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <form action="registrarCliente" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Tipo de registro </label><br> 
								<select class="form-control" id="estado" name="rol" required>
									<option value="">Seleccione rol</option>
									<option>Profesional</option>
									<option>Empresa</option>
								</select>
							</div>  
						</div>  
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label id="label-primer-nombre">Primer nombre</label>
                                <input type="text" name="primerNombre" placeholder="...." class="form-control">
                            </div>
                            <div class="col-sm-4 form-group bloque-profesional">
                                <label>Segundo nombre</label>
                                <input type="text" name="segundoNombre"  placeholder="...." class="form-control">
                            </div>
                              <div class="col-sm-4 form-group bloque-profesional">
                                <label>Primer apellido</label>
                                <input type="text" name="primerApellido"  placeholder="...." class="form-control">
                            </div> 
                        </div>                  
                        <div class="row">
                            <div class="col-sm-6 form-group bloque-profesional">
                                <label>Segundo apellido</label>
                                <input type="text" name="segundoApellido"  placeholder="...." class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>E-mail</label>
                                <input type="text" name="email" placeholder="...." class="form-control">
                            </div>  
                        </div>   
                           <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>E-mail alternativo</label>
                                <input type="text" name="emailAlternativo" placeholder="...." class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Celular</label>
                                <input type="text" name="celular" placeholder="...." class="form-control">
                            </div>
                              <div class="col-sm-4 form-group">
                                <label>Telefono fijo</label>
                                <input type="text" name="telefono" placeholder="...." class="form-control">
                            </div> 
                        </div> 

                          <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Usuario</label>
                                <input type="text" name="usuario" placeholder="...." class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Contraseña</label>
                                <input type="password" name="clave" placeholder="...." class="form-control">
                            </div>
                              <div class="col-sm-4 form-group">
                                <label>Direccion</label>
                                <input type="text" name="direccion" placeholder="...." class="form-control">
                            </div> 
                        </div> 
                         <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Fecha de nacimiento</label>
                                <input type="date" name="nacimiento" placeholder="...." class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Documento</label>
                                 <select class="form-control" id="estado" name="tipoIdentificacion" required>
                                <option value="">Seleccione doccumento</option>
                                <option value="2">Cedula Ciudadania</option>
                                <option value="3">Cedula Extranjera</option>
                                <option value="4">Pasaporte</option>
                                <option value="5">Registro Civil</option>
                                <option value="6">NIT</option>
                                </select>
                            </div>
                              <div class="col-sm-4 form-group">
                                <label>No identificación</label>
                                <input type="text" name="identificacion" placeholder="...." class="form-control">
                            </div> 
                        </div> 


                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Pais </label><br>
                                 <select class="form-control" name="pais" required>
                <option value="" selected>Seleccione Pais</option>
                <option>Colombia</option>
                </select>
                              
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Ciudad </label><br>
                           <select class="form-control" id="estado" name="ciudad" required>
              <option selected>Seleccione Ciudad</option>
              <option >Barranquilla</option>
                  <option >Santa Marta</option>
                  <option >Sincelejo</option>
                  <option >Monteria</option>
                  <option >Bogota</option>
              </select>
                              
                            </div> 
  
                           <div class="col-sm-4 form-group">
                                <label>Dispositivo </label><br> 
                                <select class="form-control" id="estado" name="marca" required>
                <option selected>Seleccione marca</option>
                <option>IOS</option>
                <option>Android</option>
                </select>
                              
                            </div>       
                        </div>                  
                             
                        </div> 

            
                        
                    </div>
                   <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success" value="Enviar datos">Guardar datos</button>
           
          </div>
        
                </form> 
      </div>
    </div>
  </div>
</div>
    <!-- Large modal REGISTRO PROFESIONAL-->

     <!-- Large modal -->


<div class="modal fade bd-example-modal2-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bienvenido al registro de empresa</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- Large modal -->

    <!-- seccion -->
    <div class="container py-5">
        <div class="row align-items-center text-left">
            <div class="col-md-6"><h2>WELLIVE</h2>
            <p><b>Pasos</b></p>
            <p>Acontinuación te brindaremos los siguientes pasos para que puedas tener un registro exitoso en nuestra plataforma.</p>
            </div>
        </div>
         <div class="row align-items-center text-left py-3">
            <div class="col-md-6"><h2>PASO</h2>
            <p><b>#1</b></p>
            <p>Ingresa a www.wellive.com y si eres profesional o empresa, dirigete al boton regijase a los botones que se muestran.</p>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-center">
                <img src="{{asset('tema_cliente/v2.0/img/registro.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

         <div class="row align-items-center text-left py-3">
            <div class="col-md-6"><h2>PASO</h2>
            <p><b>#2</b></p>
            <p>Una vez ingresado en registrarse como profesional o empresa, llene el formulario con la información correcta y al finalizar dar click en registrarse. Una vez registrado se tendrá una version prueba de 1 mes para que pueda disfrutar de la plataforma de la mejor manera.</p>
            </div>
              <div class="col-md-6 d-flex flex-column align-items-center">
                <img src="{{asset('tema_cliente/v2.0/img/registro.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

         <div class="row align-items-center text-left py-3">
            <div class="col-md-6"><h2>PASO</h2>
            <p><b>#3</b></p>
            <p>Al finalizar se dirigira automaticamente a la parte administrativa del rofesional o de la empresa donde habran diferentes modulos los cuales permitiran registrar cada uno de lo servicios que usted ofrece, permitira agregar galeria de su trabajo, permitira aceptar o rechar solicitudes de servicios hechas por los usuarios, permitira revisar los pagos generados a la plataforma y permitira agregar sus empleados con su respectiva información.</p>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-center">
                <img src="{{asset('tema_cliente/v2.0/img/registro.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>


    </div>
    <!-- fin seccion -->
    

    <!-- seccion 2 -->
    <div class="container-fluid py-5">
    <div class="container">
    <h2 class="text-center">Ofrecemos calidad y servicio</h2>
            <p class="text-center lead">La plataforma elegida por los Barranquilleros</p>
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
                
             </div>
         </div>
     </div>
    <!-- fin seccion 3 -->

    <!-- seccion 4 -->

    <!-- fin seccion 4 -->

    <!-- seccion 5 -->
     <footer class="container-fluid bg-morado text-center text-white py-3">
         <p>@Derechos reservasos a Wellive</p>
         <i class="fa fa-angle-up" aria-hidden="true"></i>

     </footer>
    <!-- fin seccion 5 -->
    <!-- seccion 6 -->
    <!-- fin seccion 6 -->


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>

<script>
    $(document).ready(function(){
        $('#estado').change(function(){
           if (this.value == 'Empresa') {
               $('#label-primer-nombre').html('Nombre empresa');
               $('.bloque-profesional').css('display','none');
           }
           else {
               $('#label-primer-nombre').html('Primer nombre');
               $('.bloque-profesional').css('display','block');
           }
        });
    });
</script>
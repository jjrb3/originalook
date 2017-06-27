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
          <div class="col-md-6 d-flex flex-column flex-sm-row"><a href="inicio"><img src="{{asset('tema_cliente/v2.0/img/logotipo.png')}}" class="img-fluid" alt="logo"></a></div>
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
        <li class="nav-item active">
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

    <!-- seccion portafolio -->
      <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center py-3">
                       <h2 class="text-center">Portafolio</h2>
            <p class="text-center lead">Nuestra galeria muestra alguno de los usuarios que se unieron a nuestra plataforma</p>
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
                        <img src="{{asset('tema_cliente/v2.0/img/portfolio/roundicons.png')}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color: #e8c23d;">Cortes de pelo</h4>
                        <p style="color: white;" class="text-muted">Caballeros</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('tema_cliente/v2.0/img/portfolio/startup-framework.png')}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color: #e8c23d;">Maquillaje de cejas</h4>
                        <p style="color: white;" class="text-muted">Mujeres sacar cejas</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('tema_cliente/v2.0/img/portfolio/treehouse.png')}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color: #e8c23d;">Manicure</h4>
                        <p style="color: white;" class="text-muted">Diseños a gustos</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('tema_cliente/v2.0/img/portfolio/golden.png')}}" class="img-fluid" alt="">
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
                        <img src="{{asset('tema_cliente/v2.0/img/portfolio/escape.png')}}" class="img-fluid" alt="">
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
                        <img src="{{asset('tema_cliente/v2.0/img/portfolio/dreams.png')}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color: #e8c23d;">Arreglos para fiestas</h4>
                        <p style="color: white;" class="text-muted">Especialista en arreglos para noche de fiesta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin seccion 2portafolio -->

    <!-- seccion 3 -->
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
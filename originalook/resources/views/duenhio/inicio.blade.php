<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Originalook</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('tema_administrador/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="{{asset('tema_administrador/plugins/fullcalendar/fullcalendar.min.css')}}">
  <link rel="stylesheet" href="{{asset('tema_administrador/plugins/fullcalendar/fullcalendar.print.css')}}" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('tema_administrador/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('tema_administrador/dist/css/skins/_all-skins.min.css')}}">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
     <div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="inicio" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Panel</b> Originalook</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes 1 mensajes</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">              
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{asset('tema_administrador/dist/img/per.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todos los Mensages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes 3 Notificaciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Cuenta activa hasta el 2017/05/28
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> Saldo a favor
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Tienes nueva solicitudes
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todo</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('tema_administrador/dist/img/per.jpg')}}" class="img-circle" width="30" alt="User Image">
              <span class="hidden-xs">{{$nombreUsuario}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('tema_administrador/dist/img/per.jpg')}}" class="img-circle" alt="User Image">

                <p>
                 {{$nombreUsuario}}
                  <small>2017</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="perfil" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="cerrarSesion" class="btn btn-default btn-flat">Salir</a>
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
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('tema_administrador/dist/img/per.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{$nombreUsuario}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menú Originalook</li>
        <li class="treeview"><a href="inicio"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
        <li class="treeview"><a href="perfil"><i class="fa fa-user "></i><span>Perfil</span></a></li>
<li class="treeview">
<a href="#">
<i class="fa fa fa-th"></i>
<span>Usuarios</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">
<li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Usuarios Registrados</a></li>
<li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Usuarios Pro</a></li>
<li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Usuarios Inactivos</a></li>
</ul>
</li>
        <li class="treeview"><a href="solicitudes"><i class="fa fa-calendar"></i> <span>Solicitudes</span></a></li>
        <li class="treeview"><a href="pagos"><i class="fa fa-share"></i> <span>Mis Pagos Hechos</span></a></li>

<li class="treeview">
<a href="#">
<i class="fa fa fa-th"></i>
<span>Usuarios</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">
<li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
<li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
<li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
<li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
</ul>
</li>
        <li><a href="portafolio"><i class="fa fa-image"></i> <span>Mi Portafolio</span></a></li>
        <li><a href="documentacion"><i class="fa fa-book"></i> <span>Documentación</span></a></li>
        <li class="header">Mas</li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Información</span></a></li>      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small>Originalook</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> inicio</a></li>
        <li class="active">Panel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
          <center><h1>BIENVENIDO AL PANEL ADMINISTRATIVO ORIGINALOOK</h1></center> 
            </div>
            <!-- /.box-body -->
              <div class="container">
<div class="row">
<div class="col-md-12">

<!-- aqui insertaremos el slider -->
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicatodores -->
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>

  <!-- Contenedor de las imagenes -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <img src="{{asset('tema_administrador/dist/img/slider/5.jpg')}}" alt="Imagen 1">
      <div class="carousel-caption"></div>
    </div>

    <div class="item">
      <img src="{{asset('tema_administrador/dist/img/slider/4.jpg')}}" alt="Imagen 2">
      <div class="carousel-caption"> SI PAGAS CON TU VISA O VISA ELECTRON<BR>RECIBE UN 10% DE DESCUENTO</div>
    </div>

    <div class="item">
      <img src="{{asset('tema_administrador/dist/img/slider/6.jpg')}}" alt="Imagen 3">
      <div class="carousel-caption"> </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>

</div>


</div>
</div>
</div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 10.2.1
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Originalook</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<script src="{{asset('tema_administrador/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('tema_administrador/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="{{asset('tema_administrador/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('tema_administrador/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{asset('tema_administrador/dist/js/app.min.js')}}"></script>
<script src="{{asset('tema_administrador/dist/js/demo.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')}}"></script>
<script src="{{asset('tema_administrador/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<!-- Page specific script -->


    </body>
</html>
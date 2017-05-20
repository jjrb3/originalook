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

    <a href="index2.html" class="logo">

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

              <img src="{{asset('recursos/imagen_perfil')}}/{{$rutaImagen}}" class="img-circle" width="30" alt="User Image">

              <span class="hidden-xs">{{$nombreUsuario}}</span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">

                <img src="{{asset('recursos/imagen_perfil')}}/{{$rutaImagen}}" class="img-circle" alt="User Image">s



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

          <img src="{{asset('recursos/imagen_perfil')}}/{{$rutaImagen}}" class="img-circle" alt="User Image">

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

        <li class="treeview"><a href="perfil"><i class="fa fa-user "></i><span>Mi Perfil</span></a></li>

        <li><a href="servicios"><i class="fa fa-th"></i> <span>Mis Servicios</span></a></li>

        <li class="treeview"><a href="solicitudes"><i class="fa fa-calendar"></i> <span>Mis Solicitudes</span></a></li>

        <li class="treeview"><a href="pagos"><i class="fa fa-share"></i> <span>Mis Pagos Hechos</span></a></li>

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

        Pagos

        <small>Originalook</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li class="active">Pagos</li>

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

                   

          <!-- CONTACT -->

                    <div class="page-section" id="contact">

                    <div class="row">

                        <div class="col-md-12">

                           <center> <h4 class="widget-title">Mis pagos realizados</h4>

                            <p>Verifica la informacion detallada de tus pagos hechos.</p></center>



                        </div>

                    </div>

                    </div>



<div class="table-responsive">

  <table class="table">

    <thead>

      <tr>

        <th>#</th>

        <th>Identificacion</th>

        <th>Codigo de Pago</th>

        <th>Servicio realizado</th>

        <th>Metodo de pago</th>

        <th>Valor pagado</th>

        <th>Fecha Generacion</th>

        <th>Fecha De Pago</th>

        <th>Estado</th>



      </tr>

    </thead>

    <tbody>

      <tr>

        <td>000001</td>

        <td>987654321</td>

        <td>852369</td>

        <td>Maquillador</td>

        <td>Giro</td>

        <td>550.000</td>

        <td>2017/02/22</td>

        <td>2017/02/22</td>

        <td>Pagada</td>

      

      </tr>

      <tr>

        <td>000002</td>

        <td>987654321</td>

        <td>852369</td>

        <td>Maquillador</td>

        <td>Giro</td>

        <td>150.000</td>

        <td>2017/02/22</td>

        <td>2017/02/22</td>

        <td>Pagada</td>

       

      </tr>

      <tr>

        <td>000003</td>

        <td>987654321</td>

        <td>852369</td>

        <td>Maquillador</td>

        <td>Consignacion bancaria</td>

        <td>100.000</td>

        <td>2017/02/22</td>

        <td>2017/02/22</td>

        <td>En Mora</td>

      </tr>

    </tbody>

  </table>

  <div class="clearfix"></div>
<ul class="pagination pull-right">
<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>

</div>

          



            </div>

            <!-- /.box-body -->

          </div>

          <!-- /. box -->

        </div>

        <!-- /.col -->

            <div class="row">

    <div class="col-md-12">

      <div class="page-section" id="contact">

      <div class="row">



 

                           <center> <h4 class="widget-title">AUN NO HAS PAGADO?</h4>

                            <p>obten informacion detallada de tus pagos hechos.</p></center>
                                <center>

                            <p>Se Aceptan giros en super efecti o servientrega en caso de ser así enviar al numero de cuenta  09812345678 y adjuntar factura</p>


                              <a href="" data-title="Edit" data-toggle="modal" data-target="#edit"><img src="{{asset('tema_administrador/dist/img/credit/visa.png')}}" class="img-circle" width="50" alt="User Image"></a>
                              <a href=""  data-title="Edit" data-toggle="modal" data-target="#edit"> <img src="{{asset('tema_administrador/dist/img/credit/paypal2.png')}}" class="img-circle" width="50" alt="User Image"></a>
                              <a href=""  data-title="Edit" data-toggle="modal" data-target="#edit"><img src="{{asset('tema_administrador/dist/img/credit/mastercard.png')}}" class="img-circle" width="50" alt="User Image"></a>
                            
      </div>

      </div>

    <br>



    </div>

<!-- MODAL -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
<h4 class="modal-title custom_align" id="Heading">LLena los campos para validar la información</h4>
</div>
<div class="modal-body">
<style type="text/css">
  .credit-card-div  span { padding-top:10px; }
.credit-card-div img { padding-top:30px; }
.credit-card-div .small-font { font-size:9px; }
.credit-card-div .pad-adjust { padding-top:10px; }
</style>
                      <form action="#" class="credit-card-div">
                      <div class="panel panel-default" >
                      <div class="panel-heading">

                      <div class="row ">
                      <div class="col-md-12">
                      <input type="text" class="form-control" placeholder="Enter Card Number" />
                      </div>
                      </div>
                      <div class="row ">
                      <div class="col-md-3 col-sm-3 col-xs-3">
                      <span class="help-block text-muted small-font" > Expiry Month</span>
                      <input type="text" class="form-control" placeholder="MM" />
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                      <span class="help-block text-muted small-font" >  Expiry Year</span>
                      <input type="text" class="form-control" placeholder="YY" />
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                      <span class="help-block text-muted small-font" >  CCV</span>
                      <input type="text" class="form-control" placeholder="CCV" />
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                      <img src="assets/img/1.png" class="img-rounded" />
                      </div>
                      </div>
                      <div class="row ">
                      <div class="col-md-12 pad-adjust">

                      <input type="text" class="form-control" placeholder="Name On The Card" />
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12 pad-adjust">
                      <div class="checkbox">
                      <label>
                      <input type="checkbox" checked class="text-muted"> Save details for fast payments <a href="#"> learn how ?</a>
                      </label>
                      </div>
                      </div>
                      </div>
                      <div class="row ">
                      <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                      <input type="submit"  class="btn btn-danger" value="CANCEL" />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                      <input type="submit"  class="btn btn-warning btn-block" value="PAY NOW" />
                      </div>
                      </div>

                      </div>
                      </div>
                      </form>
</div>
</div>
<!-- /.modal-content --> 
</div>
<!-- /.modal-dialog --> 
</div>

<!-- END MODAL -->

    </div>

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
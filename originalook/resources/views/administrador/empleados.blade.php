<!DOCTYPE html>
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Originalook</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

                                                <img src="{{asset('recursos/imagen_perfil')}}/{{$rutaImagen}}" class="img-circle" alt="User Image">

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
                @if($idRol == 3)
                    <li class="treeview"><a href="empleados"><i class="fa fa-users"></i> <span>Empleados</span></a></li>
                @endif
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

                Servicios

                <small>Originalook</small>

            </h1>

            <ol class="breadcrumb">

                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

                <li class="active">Calendario</li>

            </ol>

        </section>



        <!-- Main content -->

        <section class="content">

            <div class="row">

                <div class="col-md-12">

                    <div class="page-section" id="contact">

                        <div class="row">

                            <div class="col-md-12">

                                <center> <h4 class="widget-title">Mis Empleados originalook</h4>

                                    <p>Agrega Tus Empleados.</p></center>



                            </div>

                        </div>

                    </div>

                    <br>

                    <form class="form-horizontal" action="empleados/guardar" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-2"></label>
                                <div class="col-md-4">
                                    <select name="id_rol" class="form-control input-md">
                                        @foreach($roles as $listado)
                                            <option value="{{$listado->id}}">{{$listado->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input id="" name="documento" type="text" min="0" placeholder="Documento" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2"></label>
                                <div class="col-md-4">
                                    <input name="nombre" type="text" placeholder="Nombre" class="form-control input-md" required>
                                </div>
                                <div class="col-md-4">
                                    <input name="apellido" type="text" min="0" placeholder="Apellido" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2"></label>
                                <div class="col-md-4">
                                    <input name="direccion" type="text" placeholder="Direccion" class="form-control input-md" required>
                                </div>
                                <div class="col-md-4">
                                    <input name="telefono" type="text" min="0" placeholder="Teléfono" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2"></label>
                                <div class="col-md-4">
                                    <input name="fecha_nacimiento" type="date" class="form-control input-md" required>
                                </div>
                                <div class="col-md-4">
                                    <select name="estado" class="form-control input-md">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2"></label>
                                <div class="col-md-4">
                                    <input name="disponible_fecha" type="date" class="form-control input-md" required>
                                </div>
                                <div class="col-md-4">
                                    <input name="disponible_hora" type="time" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2"></label>
                                <div class="col-md-4">
                                    <input name="ciudad" type="text" placeholder="Ciudad" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5"></label>
                                <div class="col-md-4">
                                    <button id="" name="" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <br>
                </div>
            </div>


            @php($result = (int)isset($_REQUEST['result']) ? isset($_REQUEST['result']) : 0)
            @if ($result == 1)
                <div class="alert alert-dismissable alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="glyphicon glyphicon-ok-sign" style="font-size: 20px"></i>&nbsp;&nbsp;&nbsp;
                    Se guardó el empleado correctamente
                </div>
            @elseif ($result == -1)
                <div class="alert alert-dismissable alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="glyphicon glyphicon-exclamation-sign" style="font-size: 20px"></i>&nbsp;&nbsp;&nbsp;
                    Se encontraron problemas al guardar el empleado
                </div>
            @endif
            <div class="row">

                <!-- /.col -->

                <div class="col-md-12">

                    <div class="box box-primary">

                        <div class="box-body no-padding">

                            <!-- THE CALENDAR -->

                            <div class="page-section" id="contact">

                                <div class="row">

                                    <div class="col-md-12">

                                        <center> <h4 class="widget-title">Mis servicios registrados</h4>





                                    </div>

                                </div>

                            </div>



                            <div class="table-responsive">

                                <table class="table">

                                    <thead>

                                    <tr>
                                        <th>Documento</th>
                                        <th>Nombre</th>

                                        <th>Apellido</th>

                                        <th>Direccion</th>

                                        <th>Fecha Nacimiento</th>

                                        <th>Rol</th>
                                        <th>telefono</th>
                                        <th>Disponibilidad</th>
                                        <th>Estado</th>
                                        <th>Opción</th>


                                    </tr>

                                    </thead>

                                    <tbody>

                                        @if($empleados)
                                            @foreach($empleados as $lista)
                                                <tr>
                                                    <td>{{$lista->documento}}</td>
                                                    <td>{{$lista->nombre}}</td>
                                                    <td>{{$lista->apellido}}</td>
                                                    <td>{{$lista->direccion}}</td>
                                                    <td>{{$lista->fecha_nacimiento}}</td>
                                                    <td>
                                                        @if($lista->id_rol == 1)
                                                            Profesional
                                                        @elseif($lista->id_rol == 2)
                                                            Administrador
                                                        @elseif($lista->id_rol == 3)
                                                            Empresa
                                                        @endif
                                                    </td>
                                                    <td>{{$lista->telefono}}</td>
                                                    <td>{{$lista->disponible_fecha}} - {{substr($lista->disponible_hora,0,5)}}</td>
                                                    <td>
                                                        @if($lista->estado == 1)
                                                            Activo
                                                        @else
                                                            Inactivo
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"
                                                                onclick="idEliminar({{$lista->id}})">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>

                                </table>

                            </div>



                        </div>

                        <!-- /.box-body -->

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

</body>

</html>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Borrar la imagen</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Esta seguro que desea eliminarlo?</div>

            </div>
            <div class="modal-footer ">
                <button id="btn-eliminar" type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>Si</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
    </div>
</div>


<script>
    function idEliminar(id) {
        jQuery('#btn-eliminar').attr('onclick','eliminar('+id+')');
    }
    function eliminar(id) {

        jQuery.ajax({
            url: 'empleados/eliminar',
            type: 'post',
            data: {id:id},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            dataType: 'json',
            success: function (json) {
                switch (json.resultado) {
                    case 1:
                        location.assign('?mensajeEliminar=true');
                        break;
                    default:
                        location.assign('?mensajeEliminar=false');
                        break;
                }
            },
            error: function(result) {
                location.assign('?mensajeEliminar=false');
            }
        });
    }
</script>
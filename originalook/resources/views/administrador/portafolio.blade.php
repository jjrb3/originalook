<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

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

			  <span class="label label-success">1</span>

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

			  <img src="{{asset('recursos/imagen_perfil')}}/{{$rutaImagen}}"  class="img-circle" width="30" alt="User Image">

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

        <?=$menu;?>

	</section>

	<!-- /.sidebar -->

  </aside>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

	<!-- Content Header (Page header) -->

	<section class="content-header">

	  <h1>

		Portafolio

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

 @if(count($imagen) > 0)
	@foreach($imagen as $lista)
	<div class="col-xs-3" align="center">
		<a href="#" class="thumbnail">
			<img src="{{asset('recursos/imagen_portafolio')}}/{{$lista['url']}}" class="img-circle" alt="User Image">
			<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" onclick="idEliminar({{$lista['id']}})">
				<span class="glyphicon glyphicon-trash"></span>
			</button>
		</a>
	</div>
	@endforeach
@endif


	   

	</div> 


	  </div>

	<br>



	</div>

	</div>
    <!-- STIDS JEAL -->
        @php($error = isset($_REQUEST['error']) ? isset($_REQUEST['error']) : 0)
        @php($mensajeEliminar = isset($_REQUEST['mensajeEliminar']) ? isset($_REQUEST['mensajeEliminar']) : 0)

        @if ($error == 3)
             <div class="alert alert-dismissable alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="glyphicon glyphicon-exclamation-sign" style="font-size: 20px"></i>&nbsp;&nbsp;&nbsp;
                    Llegó al tope de las imagenes que puede subir
            </div>
        @endif
        @if ($mensajeEliminar == true)
             <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="glyphicon glyphicon-ok-sign" style="font-size: 20px"></i>&nbsp;&nbsp;&nbsp;
                    Se eliminó la imagen correctamente
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <div class="page-section" id="contact">
                            <div class="row">
                                <div class="col-md-12">
                                    <center>
                                        <h4 class="widget-title">Mis Imagenes Originalook</h4>
                                        <p>Sube tus imagenes para que los usuarios puedan ver tu trabajo.</p>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="table-responsive">

                                        <table id="mytable" class="table table-bordred table-striped">
                                            <thead>
                                                <th>#</th>
                                                <th>perfil</th>
                                                <th>Estado</th>
                                                <th>Aceptado</th>
                                                <th>Saldo de cuenta</th>
                                                <th>Fecha de creacion</th>
                                                <th>Decha de actualización</th>
                                                <th>Imagen</th>
                                            </thead>
                                            <tbody>
                                                @if(count($profesonales) > 0)
                                                    @php($cnt = 0)
                                                    @foreach($profesonales as $profesional)
                                                        @php($cnt++)
                                                        <tr>
                                                            <td>{{$cnt}}</td>
                                                            <td>{{$profesional['perfil']}}</td>
                                                            <td>
                                                                @if($profesional['estado'] == 1)
                                                                    Activo
                                                                @else
                                                                    Inactivo
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($profesional['aceptado'] == 1)
                                                                    Sí
                                                                @else
                                                                    No
                                                                @endif
                                                            </td>
                                                            <td>${{number_format($profesional['saldo_de_cuenta'])}}</td>
                                                            <td>{{$profesional['fecha_creacion']}}</td>
                                                            <td>{{$profesional['fecha_modificacion']}}</td>
                                                            <td>
                                                                <p data-placement="top" data-toggle="tooltip" title="Edit">
                                                                    <button class="btn btn-primary btn-xs" onclick="asignarId({{$profesional['id']}})" data-title="Edit" data-toggle="modal" data-target="#edit">
                                                                        <span class="fa fa-image"></span>
                                                                    </button>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
















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

<script>
	function asignarId(id){
	 jQuery('#id').val(id);
	}

    function idEliminar(id) {
	    jQuery('#btn-eliminar').attr('onclick','eliminarImagen('+id+')');
    }

    function eliminarImagen(id) {
        jQuery.ajax({
            url: 'portafolio/borrar',
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

<!-- Page specific script -->



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

            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Esta seguro que desea borrar está imagen?</div>

        </div>
        <div class="modal-footer ">
            <button id="btn-eliminar" type="button" class="btn btn-success" onclick="eliminarImagen()"><span class="glyphicon glyphicon-ok-sign"></span>Si</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Editar la imagen</h4>
            </div>

            <div class="modal-body">
                <form method="post" action="portafolio/guardarImagen" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input class="form-control " name="id" id="id" type="hidden">
                    </div>
                    <div class="form-group">
                        <input class="form-control " name="nombre" type="text" placeholder="Nombre de la imagen">
                    </div>
                    <div class="form-group">
                        <textarea rows="2" name="comentario" class="form-control" placeholder="comentario de la imagen"></textarea>
                        Buscar Imagen: <input name="imagen" type="file">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Cargar Imagen</button>
                </form>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
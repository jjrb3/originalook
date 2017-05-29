@extends('temas.administrador')

@section('contenido')

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
<section class="content">

    <div class="row">

        <div class="col-md-12">

            <div class="page-section" id="contact">

                <div class="row">

                    <div class="col-md-12">

                        <center> <h4 class="widget-title">Mis servicios originalook</h4>

                            <p>Agrega, edita o elimina los servicios que tu ofreces.</p></center>



                    </div>

                </div>

            </div>

            <br>

            <form class="form-horizontal" action="servicios/guardar" method="post">

                <fieldset>



                    <!-- Select Basic -->

                    <div class="form-group">

                        <label class="col-md-4 control-label" for="selectbasic"></label>

                        <div class="col-md-4">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">



                        </div>

                    </div>



                    <!-- Text input-->

                    <div class="form-group">

                        <label class="col-md-4 control-label" for="textinput"></label>

                        <div class="col-md-4">

                            <input id="textinput" name="servicio" type="text" placeholder="Elija nombre del servicio" class="form-control input-md" required>



                        </div>

                    </div>



                    <!-- Text input-->

                    <div class="form-group">

                        <label class="col-md-4 control-label" for=""></label>

                        <div class="col-md-4">

                            <input id="" name="valor" type="number" min="0" placeholder="Valor del servicio" class="form-control input-md" required>



                        </div>

                    </div>



                    <!-- Textarea -->

                    <div class="form-group">

                        <label class="col-md-4 control-label" for=""></label>

                        <div class="col-md-4">

                            <textarea class="form-control" id="" name="descripcion" placeholder="Breve descripción del servicio" required></textarea>

                        </div>

                    </div>



                    <!-- Button -->

                    <div class="form-group">

                        <label class="col-md-5 control-label" for=""></label>

                        <div class="col-md-4">

                            <button id="" name="" class="btn btn-success">Guardar Servicios</button>

                        </div>

                    </div>



                </fieldset>

            </form>

            <br>


        </div>

    </div>
</section>

@endsection
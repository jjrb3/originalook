@extends('temas.administrador')

@section('contenido')

<section class="content-header">
    <h1>
        Editar usuario
        <small>Wellive</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Calendario</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <form action="usuario/actualizar" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label class="col-sm-3 control-label" for="formGroup">
                    Primer Nombre
                    <input class="form-control" name="primer_nombre" type="text">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Segundo Nombre
                    <input class="form-control" name="segundo_nombre" type="text">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Primer Apellido
                    <input class="form-control" name="primer_apellido" type="text">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Segundo Apellido
                    <input class="form-control" name="segundo_nombre" type="text">
                </label>

                <label class="col-sm-3 control-label" for="formGroup">
                    Identificación
                    <input class="form-control" name="identificacion" type="text">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Dirección
                    <input class="form-control" name="direccion" type="text">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Pais
                    <input class="form-control" name="pais" type="text">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Ciudad
                    <input class="form-control" name="ciudad" type="text">
                </label>

                <label class="col-sm-3 control-label" for="formGroup">
                    Teléfono
                    <input class="form-control" name="telefono" type="text">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Celular
                    <input class="form-control" name="celular" type="text">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Genero
                    <select class="form-control" name="genero">
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Fecha nacimiento
                    <input class="form-control" name="fecha_nacimiento" type="date">
                </label>

                <label class="col-sm-3 control-label" for="formGroup">
                    Usuario
                    <input class="form-control" name="usuario" type="text">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Contraseña
                    <input class="form-control" name="clave" type="password">
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Estado
                    <select class="form-control" name="genero">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </label>
                <label class="col-sm-3 control-label" for="formGroup">
                    Correo
                    <input class="form-control" name="correo" type="email">
                </label>

                <div class="col-sm-12">
                    <br>
                    <button id="" name="" class="btn btn-success">Guardar Servicios</button>
                </div>

            </form>
        </div>
    </div>
</section>

@endsection
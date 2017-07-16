<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public static function ObtenerMenu(Request $request) {

        $idRol = $request->session()->get('idRol');

        $menu = '
        <ul class="sidebar-menu">
            <li class="header">Menú Originalook</li>
            <li class="treeview">
                <a href="inicio">
                    <i class="fa fa-dashboard"></i>
                     <span>
                        Inicio
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="perfil">
                    <i class="fa fa-user "></i>
                    <span>
                        Mi Perfil
                    </span>
                </a>
            </li>' .

            ($idRol == 2 ? '<li class="treeview"><a href="usuario"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>' : '') .

            ($idRol == 4 || $idRol == 2 ? '<li class="treeview"><a href="empleados"><i class="fa fa-users"></i> <span>Empleados</span></a></li>' : '') .

            ($idRol != 2 ? '<li><a href="servicios"><i class="fa fa-th"></i> <span>Mis Servicios</span></a></li>' : '<li><a href="categoria"><i class="fa fa-th"></i> <span>Categoria</span></a></li>') .

            '<li class="treeview">
                <a href="solicitudes">
                    <i class="fa fa-calendar"></i> 
                    <span>
                        Mis Solicitudes
                    </span>
                </a>
            </li>' .

            ($idRol == 2 ? '<li><a href="pagos"><i class="fa fa-share"></i> <span>Mis Pagos Hechos</span></a></li>' : '') .

            ($idRol != 2 ? '<li><a href="portafolio"><i class="fa fa-image"></i> <span>Mi Portafolio</span></a></li>' : '') .

            '<li class="header">Mas</li>'.

            ($idRol != 2 ? '<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Información</span></a></li>' : '') .

        '</ul>';

        return $menu;
    }
}

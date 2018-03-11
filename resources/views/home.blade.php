@extends('layouts.panel')
@section('title','Home')
@section('content')
<!-- Page Loader -->
<!-- tiempo de carga, si no lo vez necesario lo quitamos, pero este si esta sincronizado con el tiempo de carga de la web-->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle">
                    </div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle">
                    </div>
                </div>
            </div>
        </div>
        <p>
            Espere un momento...
        </p>
    </div>
</div>
<!-- #END# Page Loader -->

<!-- Overlay For Sidebars -->
<div class="overlay">
</div>
<!-- #END# Overlay For Sidebars -->


<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar-collapse" data-toggle="collapse" href="javascript:void(0);">
            </a>
            <a class="bars" href="javascript:void(0);">
            </a>
            <a class="navbar-brand" href="index.html">
                SISTEMA DE ATENCION A RECLAMOS DE LOS USUARIOS - FUNDEMUJER
            </a>
        </div>
        
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside class="sidebar" id="leftsidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img alt="User" height="55" src="/images/perfil/{{Auth::user()->image}}" width="55"/>
            </div>
            <div class="info-container">
                <div aria-expanded="false" aria-haspopup="true" class="name" data-toggle="dropdown">
                    {{ Auth::user()->name }}
                </div>
                <div class="email">
                    {{ Auth::user()->email }}
                </div>
                <div class="btn-group user-helper-dropdown">
                    <i aria-expanded="true" aria-haspopup="true" class="material-icons" data-toggle="dropdown">
                        keyboard_arrow_down
                    </i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons">
                                    person
                                </i>
                                Mi Cuenta
                            </a>
                        </li>                       

                        <li class="divider" role="seperator">
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="material-icons">
                                input
                            </i>
                            Cerrar Sesión 
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <!-- #User Info -->
  <!-- Inicio de Menu -->
  <div class="menu">
    <ul class="list">
        <li class="header">
            Menú de Navegación 
        </li>
        <li class="active">
            <a href="/home">
                <i class="material-icons">
                    home
                </i>
                <span>
                    Inicio
                </span>
            </a>
        </li>       
        
        <!--Inicio de submenu-->
        <a class="menu-toggle" href="javascript:void(0);">
            <i class="material-icons">
                assignment
            </i>
            <span>
                Reclamos
            </span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="#">
                    Reclamos
                </a>
            </li>
            <li>
                <a href="#">
                    Recl. en proceso
                </a>
            </li>
            <li>
                <a href="#">
                    Resol. en revisión
                </a>
            </li>
            <li>
                <a href="#">
                    Resol aprobadas:
                </a>
            </li>            
        </ul>
        <!--Fin de submenu-->  
        
        <!--Inicio de submenu-->
        <a class="menu-toggle" href="javascript:void(0);">
            <i class="material-icons">
                assignment_ind
            </i>
            <span>
                Clientes
            </span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="#">
                    Clientes naturales
                </a>
            </li>
            <li>
                <a href="#">
                    Clientes jurídicos
                </a>
            </li>
            <li>
                <a href="#">
                    Cargar clientes
                </a>
            </li>
                     
        </ul>
        <!--Fin de submenu-->      

    </ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
        © 2016 - 2017
        <a href="javascript:void(0);">
         AdminBSB - Material Design
     </a>
     .
 </div>
 <div class="version">
    <b>
        Version:
    </b>
    1.0.5
</div>
</div>
<!-- #Footer -->
</aside>

</section>
<section class="content">
    <!-- aqui comienza el contenido-->
    <!-- aqui comienza el contenido-->
    <!-- aqui comienza el contenido-->
    <!-- aqui comienza el contenido-->
    <!-- aqui comienza el contenido-->
    @section('contenido')
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DASHBOARD
            </h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">
                            playlist_add_check
                        </i>
                    </div>
                    <div class="content">
                        <div class="text">
                            NEW TASKS
                        </div>
                        <div class="number count-to" data-fresh-interval="20" data-from="0" data-speed="1000" data-to="500">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">
                            help
                        </i>
                    </div>
                    <div class="content">
                        <div class="text">
                            NEW TICKETS
                        </div>
                        <div class="number count-to" data-fresh-interval="20" data-from="0" data-speed="1000" data-to="257">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">
                            forum
                        </i>
                    </div>
                    <div class="content">
                        <div class="text">
                            NEW COMMENTS
                        </div>
                        <div class="number count-to" data-fresh-interval="20" data-from="0" data-speed="1000" data-to="243">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">
                            person_add
                        </i>
                    </div>
                    <div class="content">
                        <div class="text">
                            NEW VISITORS
                        </div>
                        <div class="number count-to" data-fresh-interval="20" data-from="0" data-speed="1000" data-to="1225">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->   
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="header">
                    <h2>
                        TASK INFOS
                    </h2>                    
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Task
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Manager
                                    </th>
                                    <th>
                                        Progress
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Task A
                                    </td>
                                    <td>
                                        <span class="label bg-green">
                                            Doing
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="62" class="progress-bar bg-green" role="progressbar" style="width: 62%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Task B
                                    </td>
                                    <td>
                                        <span class="label bg-blue">
                                            To Do
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar bg-blue" role="progressbar" style="width: 40%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        Task C
                                    </td>
                                    <td>
                                        <span class="label bg-light-blue">
                                            On Hold
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" class="progress-bar bg-light-blue" role="progressbar" style="width: 72%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        Task D
                                    </td>
                                    <td>
                                        <span class="label bg-orange">
                                            Wait Approvel
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" class="progress-bar bg-orange" role="progressbar" style="width: 95%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        Task E
                                    </td>
                                    <td>
                                        <span class="label bg-red">
                                            Suspended
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="87" class="progress-bar bg-red" role="progressbar" style="width: 87%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
        <!-- Browser Usage -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="header">
                    <h2>
                        BROWSER USAGE
                    </h2>                    
                </div>
                <div class="body">
                    <div class="dashboard-donut-chart" id="donut_chart">
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Browser Usage -->
    </div>
</div>
<!--Fin del contenido que sera remplazado por las vistas hijas-->
<!--Fin del contenido que sera remplazado por las vistas hijas-->
<!--Fin del contenido que sera remplazado por las vistas hijas-->
<!--Fin del contenido que sera remplazado por las vistas hijas-->
<!--Fin del contenido que sera remplazado por las vistas hijas-->
@show
</section>
@stop

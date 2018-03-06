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
            <a href="index.html">
                <i class="material-icons">
                    home
                </i>
                <span>
                    Inicio
                </span>
            </a>
        </li>
        <li>
            <a href="pages/typography.html">
                <i class="material-icons">
                    text_fields
                </i>
                <span>
                    Typography
                </span>
            </a>
        </li>
        <li>
            <a href="pages/helper-classes.html">
                <i class="material-icons">
                    layers
                </i>
                <span>
                    Helper Classes
                </span>
            </a>
        </li>
        <li>
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">
                    widgets
                </i>
                <span>
                    Widgets
                </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="menu-toggle" href="javascript:void(0);">
                        <span>
                            Cards
                        </span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/widgets/cards/basic.html">
                                Basic
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets/cards/colored.html">
                                Colored
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets/cards/no-header.html">
                                No Header
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="menu-toggle" href="javascript:void(0);">
                        <span>
                            Infobox
                        </span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/widgets/infobox/infobox-1.html">
                                Infobox-1
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets/infobox/infobox-2.html">
                                Infobox-2
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets/infobox/infobox-3.html">
                                Infobox-3
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets/infobox/infobox-4.html">
                                Infobox-4
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets/infobox/infobox-5.html">
                                Infobox-5
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">
                    swap_calls
                </i>
                <span>
                    User Interface (UI)
                </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="pages/ui/alerts.html">
                        Alerts
                    </a>
                </li>
                <li>
                    <a href="pages/ui/animations.html">
                        Animations
                    </a>
                </li>
                <li>
                    <a href="pages/ui/badges.html">
                        Badges
                    </a>
                </li>
                <li>
                    <a href="pages/ui/breadcrumbs.html">
                        Breadcrumbs
                    </a>
                </li>
                <li>
                    <a href="pages/ui/buttons.html">
                        Buttons
                    </a>
                </li>
                <li>
                    <a href="pages/ui/collapse.html">
                        Collapse
                    </a>
                </li>
                <li>
                    <a href="pages/ui/colors.html">
                        Colors
                    </a>
                </li>
                <li>
                    <a href="pages/ui/dialogs.html">
                        Dialogs
                    </a>
                </li>
                <li>
                    <a href="pages/ui/icons.html">
                        Icons
                    </a>
                </li>
                <li>
                    <a href="pages/ui/labels.html">
                        Labels
                    </a>
                </li>
                <li>
                    <a href="pages/ui/list-group.html">
                        List Group
                    </a>
                </li>
                <li>
                    <a href="pages/ui/media-object.html">
                        Media Object
                    </a>
                </li>
                <li>
                    <a href="pages/ui/modals.html">
                        Modals
                    </a>
                </li>
                <li>
                    <a href="pages/ui/notifications.html">
                        Notifications
                    </a>
                </li>
                <li>
                    <a href="pages/ui/pagination.html">
                        Pagination
                    </a>
                </li>
                <li>
                    <a href="pages/ui/preloaders.html">
                        Preloaders
                    </a>
                </li>
                <li>
                    <a href="pages/ui/progressbars.html">
                        Progress Bars
                    </a>
                </li>
                <li>
                    <a href="pages/ui/range-sliders.html">
                        Range Sliders
                    </a>
                </li>
                <li>
                    <a href="pages/ui/sortable-nestable.html">
                        Sortable & Nestable
                    </a>
                </li>
                <li>
                    <a href="pages/ui/tabs.html">
                        Tabs
                    </a>
                </li>
                <li>
                    <a href="pages/ui/thumbnails.html">
                        Thumbnails
                    </a>
                </li>
                <li>
                    <a href="pages/ui/tooltips-popovers.html">
                        Tooltips & Popovers
                    </a>
                </li>
                <li>
                    <a href="pages/ui/waves.html">
                        Waves
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">
                    assignment
                </i>
                <span>
                    Forms
                </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="pages/forms/basic-form-elements.html">
                        Basic Form Elements
                    </a>
                </li>
                <li>
                    <a href="pages/forms/advanced-form-elements.html">
                        Advanced Form Elements
                    </a>
                </li>
                <li>
                    <a href="pages/forms/form-examples.html">
                        Form Examples
                    </a>
                </li>
                <li>
                    <a href="pages/forms/form-validation.html">
                        Form Validation
                    </a>
                </li>
                <li>
                    <a href="pages/forms/form-wizard.html">
                        Form Wizard
                    </a>
                </li>
                <li>
                    <a href="pages/forms/editors.html">
                        Editors
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">
                    view_list
                </i>
                <span>
                    Tables
                </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="pages/tables/normal-tables.html">
                        Normal Tables
                    </a>
                </li>
                <li>
                    <a href="pages/tables/jquery-datatable.html">
                        Jquery Datatables
                    </a>
                </li>
                <li>
                    <a href="pages/tables/editable-table.html">
                        Editable Tables
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">
                    perm_media
                </i>
                <span>
                    Medias
                </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="pages/medias/image-gallery.html">
                        Image Gallery
                    </a>
                </li>
                <li>
                    <a href="pages/medias/carousel.html">
                        Carousel
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">
                    pie_chart
                </i>
                <span>
                    Charts
                </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="pages/charts/morris.html">
                        Morris
                    </a>
                </li>
                <li>
                    <a href="pages/charts/flot.html">
                        Flot
                    </a>
                </li>
                <li>
                    <a href="pages/charts/chartjs.html">
                        ChartJS
                    </a>
                </li>
                <li>
                    <a href="pages/charts/sparkline.html">
                        Sparkline
                    </a>
                </li>
                <li>
                    <a href="pages/charts/jquery-knob.html">
                        Jquery Knob
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">
                    content_copy
                </i>
                <span>
                    Example Pages
                </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="pages/examples/sign-in.html">
                        Sign In
                    </a>
                </li>
                <li>
                    <a href="pages/examples/sign-up.html">
                        Sign Up
                    </a>
                </li>
                <li>
                    <a href="pages/examples/forgot-password.html">
                        Forgot Password
                    </a>
                </li>
                <li>
                    <a href="pages/examples/blank.html">
                        Blank Page
                    </a>
                </li>
                <li>
                    <a href="pages/examples/404.html">
                        404 - Not Found
                    </a>
                </li>
                <li>
                    <a href="pages/examples/500.html">
                        500 - Server Error
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">
                    map
                </i>
                <span>
                    Maps
                </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="pages/maps/google.html">
                        Google Map
                    </a>
                </li>
                <li>
                    <a href="pages/maps/yandex.html">
                        YandexMap
                    </a>
                </li>
                <li>
                    <a href="pages/maps/jvectormap.html">
                        jVectorMap
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">
                    trending_down
                </i>
                <span>
                    Multi Level Menu
                </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);">
                        <span>
                            Menu Item
                        </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span>
                            Menu Item - 2
                        </span>
                    </a>
                </li>
                <li>
                    <a class="menu-toggle" href="javascript:void(0);">
                        <span>
                            Level - 2
                        </span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>
                                    Menu Item
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-toggle" href="javascript:void(0);">
                                <span>
                                    Level - 3
                                </span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>
                                            Level - 4
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="pages/changelogs.html">
                <i class="material-icons">
                    update
                </i>
                <span>
                    Changelogs
                </span>
            </a>
        </li>
        <li class="header">
            LABELS
        </li>
        <li>
            <a href="javascript:void(0);">
                <i class="material-icons col-red">
                    donut_large
                </i>
                <span>
                    Important
                </span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);">
                <i class="material-icons col-amber">
                    donut_large
                </i>
                <span>
                    Warning
                </span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);">
                <i class="material-icons col-light-blue">
                    donut_large
                </i>
                <span>
                    Information
                </span>
            </a>
        </li>
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
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
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
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
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

<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pasion real</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('spaceadmin/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spaceadmin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('spaceadmin/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('spaceadmin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('home.inicio') }}"><img
                        src="{{ asset('/images/logo/logoPassionReal.jpeg') }}" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('home.inicio') }}"><img
                        src="{{ asset('/images/logo/logoPassionReal.jpeg') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item nav-search d-none d-md-flex">
                        <div class="nav-link">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    {{-- <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span> --}}
                                </div>
                                {{-- <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar">
                           --}}
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    {{-- <li class="nav-item d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <span class="btn btn-primary">+ Create new</span>
                        </a>
                    </li> --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="fas fa-bell mx-0"></i>
                            <span class="count">

                                {{ auth()->user()->unreadNotifications->count() }}

                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            @if (auth()->user()->unreadNotifications->count() > 0)
                                <a class="dropdown-item" href="{{ route('notificacion.todas') }}">
                                    <p class="mb-0 font-weight-normal float-left">Tienes
                                        {{ auth()->user()->unreadNotifications->count() }} nuevas notificaciones</p>

                                    <span class="badge badge-pill badge-warning float-right">
                                        Ver todas
                                    </span>

                                </a>
                            @endif

                            @foreach (auth()->user()->unreadNotifications as $notification)
                            <div class="dropdown-divider"></div>
                            @if($notification->type=="App\Notifications\NotificacionOrden")
                            <a class="dropdown-item preview-item"
                            href="{{ route('marcar_una_leida', [$notification->id, $notification->data['id']]) }}">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-danger">
                                        <i class="fas {{ $notification->data['icon'] }} mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">
                                        {{ $notification->data['titulo'] }}
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        {{ $notification->data['nombre_completo'] }} ha realizado realizado una
                                        compra de {{ $notification->data['cantidad_creditos'] }} créditos por
                                        {{ $notification->data['subtotal'] }} Euros.
                                    </p>
                                </div>
                            </a>
                        
                            @endif

                            @if($notification->type=="App\Notifications\NotificacionReporte")
                            <a class="dropdown-item preview-item"
                            href="{{ route('marcar_un_reporte_leido', [$notification->id, $notification->data['id']]) }}">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-danger">
                                        <i class="fas {{ $notification->data['icon'] }} mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">
                                        Reporte de anuncio
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        El anuncio #{{ $notification->data['anuncio_id'] }} : {{$notification->data['titulo']}} fue reportado. 
                                    </p>
                                </div>
                            </a>
                            @endif

                            @if($notification->type=="App\Notifications\NotificacionSolicitud")
                            <a class="dropdown-item preview-item"
                            href="">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-danger">
                                        <i class="fas {{ $notification->data['icon'] }} mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">
                                        Solitud
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        El usuario # {{ $notification->data['user_id'] }}, {{$notification->data['nombre']}} solicita que su cuenta sea verificada. 
                                    </p>
                                </div>
                            </a>
                            @endif
                           
                        @endforeach
                          
                            {{-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="fas fa-wrench mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">Settings</h6>
                                    <p class="font-weight-light small-text">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="far fa-envelope mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">New user registration</h6>
                                    <p class="font-weight-light small-text">
                                        2 days ago
                                    </p>
                                </div>
                            </a> --}}
                        </div>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-envelope mx-0"></i>
                            <span class="count">25</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="messageDropdown">
                            <div class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                                </p>
                                <span class="badge badge-info badge-pill float-right">View all</span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('spaceadmin/images/faces/face4.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                                        <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('spaceadmin/images/faces/face2.jpg" alt="image') }}"
                                        class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                                        <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('spaceadmin/images/faces/face3.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                                        <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li> --}}
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            @if (!isset(auth()->user()->perfil->image->url))
                                <img style="max-width:150px;" src="{{ asset('images/user_default.png') }}" alt="foto">
                            @else
                                <img src="{{ auth()->user()->perfil->image->url }}" alt="profile" />
                            @endif

                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            {{-- <a class="dropdown-item">
                                <i class="fas fa-cog text-primary"></i>
                                Configuración
                            </a> --}}
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item">
                                <i class="fas fa-power-off text-primary"></i>
                                Salir
                            </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                    </li>
                    {{-- <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                    </li> --}}
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close fa fa-times"></i>
                    <p class="settings-heading">COLOR BARRA LATERAL</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Claro
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Oscuro
                    </div>
                    <p class="settings-heading mt-2">COLOR BARRA SUPERIOR</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            {{-- <div id="right-sidebar" class="settings-panel">
                <i class="settings-close fa fa-times"></i>
                <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                            aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task-todo">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove fa fa-times-circle"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove fa fa-times-circle"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove fa fa-times-circle"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove fa fa-times-circle"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove fa fa-times-circle"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="events py-4 border-bottom px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="fa fa-times-circle text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                            <p class="text-gray mb-0">build a js based app</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="fa fa-times-circle text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small
                                class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img
                                        src="{{ asset('spaceadmin/images/faces/face1.jpg') }}" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img
                                        src="{{ asset('spaceadmin/images/faces/face2.jpg') }}" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img
                                        src="{{ asset('spaceadmin/images/faces/face3.jpg') }}" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img
                                        src="{{ asset('spaceadmin/images/faces/face4.jpg') }}" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile">
                                    @if (!isset(auth()->user()->perfil->image->url))
                            <img style="max-width:150px;" src="{{asset('images/user_default.png')}}" alt="foto">
                            @else
                            <img src="{{auth()->user()->perfil->image->url}}" alt="profile" />
                            @endif
                                        <span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img
                                        src="{{ asset('spaceadmin/images/faces/face6.jpg') }}" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div> --}}
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="profile-image">

                                @if (!isset(auth()->user()->perfil->image->url))
                                    <img style="max-width:150px;" src="{{ asset('images/user_default.png') }}"
                                        alt="foto">
                                @else
                                    <img src="{{ auth()->user()->perfil->image->url }}" alt="profile" />
                                @endif
                            </div>
                            <div class="profile-name">
                                <p class="name">
                                    Bienvenido {{ auth()->user()->name }}

                                </p>
                                <p class="designation">
                                    {{ auth()->user()->getRoleNames() }}
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.inicio') }}">
                            <i class="fa fa-home menu-icon"></i>
                            <span class="menu-title">Pagína de inicio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('cliente.miCuenta')}}" 
                            aria-controls="page-layouts">
                            <i class="fab fa-trello menu-icon"></i>
                            <span class="menu-title">Mi cuenta</span>

                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                            aria-controls="page-layouts">
                            <i class="fas fa-users menu-icon"></i>
                            <span class="menu-title">Categorías</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item d-none d-lg-block"><a class="nav-link"
                                        href="{{ route('categoria.create') }}">Agregar categoría</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('categoria.index') }}">Ver categorías</a></li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts2" aria-expanded="false"
                            aria-controls="page-layouts">
                            <i class="fas fa-boxes menu-icon"></i>
                            <span class="menu-title">Paquetes</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts2">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item d-none d-lg-block"><a class="nav-link"
                                        href="{{ route('paquete.create') }}">Agregar paquete</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('paquete.index') }}">Ver paquetes</a></li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts3" aria-expanded="false"
                            aria-controls="page-layouts">
                            <i class="fas fa-receipt menu-icon"></i>
                            <span class="menu-title">Ordenes</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts3">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('marcar_ordenes_leidas') }}">Ver ordenes</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts4" aria-expanded="false"
                            aria-controls="page-layouts">
                            <i class="fas fa-shield-alt menu-icon"></i>
                            <span class="menu-title">Solicitudes</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts4">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('marcar_solicitudes_leidas') }}">Ver solicitudes</a></li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts5" aria-expanded="false"
                            aria-controls="page-layouts">
                            <i class="fas fa-exclamation-triangle menu-icon"></i>
                            <span class="menu-title">Reportes de cuenta</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts5">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('marcar_reportes_leidos') }}">Ver reportes</a></li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts6" aria-expanded="false"
                            aria-controls="page-layouts">
                            <i class="fas fa-bell menu-icon"></i>
                            <span class="menu-title">Notificaciones</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts6">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('notificacion.todas')}}">Ver todas</a></li>

                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts8" aria-expanded="false"
                            aria-controls="page-layouts">
                            <i class="fas fa-user-tag menu-icon"></i>
                            <span class="menu-title">Miembros</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts8">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('miembro.create')}}">Agregar miembro</a></li>

                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('miembro.index')}}">Ver miembros</a></li>

                            </ul>
                        </div>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts7" aria-expanded="false"
                            aria-controls="page-layouts">
                            <i class="fas fa-user-tag menu-icon"></i>
                            <span class="menu-title">Roles</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts7">
                       
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('roles.index')}}">Ver roles</a></li>

                            </ul>
                        </div>
                    </li> --}}



                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row grid-margin">

                        <div class="col-12">
                          <div class="card card-statistics">
                            <div class="card-body">
                              <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                  <div class="statistics-item">
                                    <p>
                                      <i class="icon-sm fa fa-user mr-2"></i>
                                      # Usuarios
                                    </p>
                                    <h2>5</h2>
                                 
                                  </div>
                                  <div class="statistics-item">
                                    <p>
                                      <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                      # Anuncios
                                    </p>
                                    <h2>{{$count_ads}}</h2>
                                  </div>
                                  <div class="statistics-item">
                                    <p>
                                      <i class="icon-sm fas fa-chart-line mr-2"></i>
                                      Ganancias
                                    </p>
                                    <h2>{{$ganancias}} </h2>
                                  </div>
                                  <div class="statistics-item">
                                    <p>
                                      <i class="icon-sm fas fa-check-circle mr-2"></i>
                                      # Reportes de cuenta
                                    </p>
                                    <h2>{{$count_reportes}}</h2>
                                  </div>
                                  <div class="statistics-item">
                                    <p>
                                      <i class="icon-sm fas fa-chart-line mr-2"></i>
                                      Ordenes
                                    </p>
                                    <h2>{{$count_orders}}</h2>
                                 </div>
                                  <div class="statistics-item">
                                    <p>
                                      <i class="icon-sm fas fa-circle-notch mr-2"></i>
                                      Solicitudes pendientes
                                    </p>
                                    @php
                                   $noleidas =  auth()->user()->unreadNotifications;
                                   $cont = 0;
                                   foreach($noleidas as $nl){
                                       if($nl->type=="App\Notifications\NotificacionSolicitud")
                                    $cont = $cont + 1;
                                   }
                                    @endphp
                                    <h2>{{$cont}}</h2>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">
                                <i class="fas fa-gift"></i>
                                Ordenes
                              </h4>
                              <canvas id="orders-chart"></canvas>
                              <div id="orders-chart-legend" class="orders-chart-legend"></div>                  
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">
                                <i class="fas fa-chart-line"></i>
                               Ventas
                              </h4>
                              <h2 class="mb-5">0 <span class="text-muted h4 font-weight-normal">Ventas</span></h2>
                              <canvas id="sales-chart"></canvas>
                            </div>
                          </div>
                        </div>
                      </div> --}}

                    @yield('contenido')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                            {{ date('Y') }}.
                            Todos los derechos reservados.</span>

                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('spaceadmin/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('spaceadmin/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('spaceadmin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('spaceadmin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('spaceadmin/js/misc.js') }}"></script>
    <script src="{{ asset('spaceadmin/js/settings.js') }}"></script>
    <script src="{{ asset('spaceadmin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('spaceadmin/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
</body>


</html>

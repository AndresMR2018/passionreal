<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>Pasionreal</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="images/logo/logoPassionReal.jpeg" type="image/x-icon" />
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/style.css">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
    <link href="css/flaticon.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
    <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/forest-menu.css" type="text/css">
    <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
    <link href="css/select2.min.css" rel="stylesheet" />
    <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
    <link href="css/nouislider.min.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
    <link href="css/slider.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
    <link href="skins/minimal/minimal.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
    <link href="css/responsive-media.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="color" href="css/colors/defualt.css">
    <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
    <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
    <link href="skins/minimal/minimal.css" rel="stylesheet">
    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
   {{--  <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> --}}
    <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
    {{-- <div class="color-switcher" id="choose_color">
        <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
        <h5>STYLE SWITCHER</h5>
        <div class="theme-colours">
            <p> Choose Colour style </p>
            <ul>
                <li>
                    <a href="#." class="defualt" id="defualt"></a>
                </li>
                <li>
                    <a href="#." class="green" id="green"></a>
                </li>
                <li>
                    <a href="#." class="blue" id="blue"></a>
                </li>
                <li>
                    <a href="#." class="red" id="red"></a>
                </li>

                <li>
                    <a href="#." class="sea-green" id="sea-green"></a>
                </li>

            </ul>
        </div>
        <div class="clearfix"> </div>
    </div> --}}
    <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
  @include('templates.header2')
    <!-- Navigation Menu End -->
    <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
    <!-- Small Breadcrumb -->
    <div class="small-breadcrumb">
        <div class="container">
            <div class=" breadcrumb-link">
                <ul>
                    <li><a href="{{url('/')}}">Inicio</a></li>
                    <li><a href="{{route('cliente.miCuenta')}}">Mi perfil</a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Small Breadcrumb -->
    <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
    <div class="main-content-area clearfix">
        <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
        <section class="section-padding gray">
            <!-- Main Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <!-- Middle Content Area -->
                    <div class="col-md-4 col-sm-12 col-xs-12 leftbar-stick blog-sidebar">
                        <!-- Sidebar Widgets -->
                        <div class="user-profile">
                            <a><img src="{{asset('storage/'.$perfil->foto)}}" alt="foto"></a>
                            <div class="profile-detail">
                                <h6>{{$user->name}}</h6>
                                <ul class="contact-details">
                                    <li>
                                        <i class="fa fa-map-marker"></i> Ubicacion, agregar este campo en perfil 
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>{{$user->email}}
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>{{$perfil->telefono}}
                                    </li>
                                </ul>
                            </div>
                            <ul>
                                <li class="active"><a href="">Perfil</a></li>
                               {{--  <li><a href="active-ads.html">Mis anuncios <span class="badge">3</span></a></li> --}}
                               {{--  <li><a href="favourite.html">Favourites Ads <span class="badge">15</span></a></li> --}}
                                <li><a href="{{route('cliente.misAnuncios')}}">Mis anuncios</a></li>
                               {{--  <li><a href="messages.html">Messages</a></li> --}}
                                <li><a href="{{route('logout')}}">Cerrar sesión</a></li>
                            </ul>
                        </div>
                        <!-- Categories -->
                        {{-- <div class="widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>Change Your Plan</a></h4>
                            </div>
                            <div class="widget-content">
                                <select class=" form-control">
                                    <option label="Select Option"></option>
                                    <option value="0">Free</option>
                                    <option value="1">Premium</option>
                                    <option value="2">Featured</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <!-- Row -->
                        <div class="profile-section margin-bottom-20">
                            <div class="profile-tabs">
                                <ul class="nav nav-justified nav-tabs">
                                    <li class="active"><a href="#profile" data-toggle="tab">Perfil</a></li>
                                    <li><a href="#edit" data-toggle="tab">Editar perfil</a></li>
                                    <li><a href="#payment" data-toggle="tab">Cambiar paquete</a></li>
                                  {{--   <li><a href="#settings" data-toggle="tab">Notification Settings</a></li> --}}
                                </ul>
                                <div class="tab-content">
                                    <div class="profile-edit tab-pane fade in active" id="profile">
                                        <h2 class="heading-md">Administre sus datos.</h2>
                                        <p>A continuación se muestran el nombre y las direcciones de correo electrónico registradas para su cuenta.</p>
                                        <dl class="dl-horizontal">
                                            <dt><strong>Su nombre </strong></dt>
                                            <dd>
                                               {{$perfil->nombre}}
                                            </dd>
                                            <dt><strong>Dirección de correo </strong></dt>
                                            <dd>
                                              {{$user->email}}
                                            </dd>
                                            <dt><strong>Número de teléfono </strong></dt>
                                            <dd>
                                          {{$perfil->telefono}}
                                            </dd>
                                            {{-- <dt><strong>País </strong></dt>
                                            <dd>
                                                España
                                            </dd> --}}
                                            <dt><strong>Ciudad </strong></dt>
                                            <dd>
                                                Málaga, agregar este campo en perfil
                                            </dd>
                                            <a href="{{route('home.getValidarCuenta')}}">
                                                <dt><strong>Usuario verificado: </strong></dt>
                                            </a>
                                            
                                            <dd>
                                                 {{$user->cta_validada}}
                                            </dd>
                                            {{-- <dt><strong>Dirección </strong></dt>
                                            <dd>
                                               calle x y calle v
                                            </dd> --}}
                                        </dl>
                                    </div>
                                    <div class="profile-edit tab-pane fade" id="edit">
                                        <h2 class="heading-md">Administra tu configuración de seguridad</h2>
                                        <p>Gestiona tu cuenta</p>
                                        <div class="clearfix"></div>
                                        <form method="POST" action="{{route('cliente.editarMiPerfil')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label>Tu nombre completo </label>
                                                    <input name="nombre" type="text" class="form-control margin-bottom-20">
                                                </div>
                                               
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <label>Número de contacto <span class="color-red">*</span></label>
                                                    <input name="telefono" type="text" class="form-control margin-bottom-20">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <label>DNI <span class="color-red">*</span></label>
                                                    <input name="dni" type="text" class="form-control margin-bottom-20">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <label>Foto <span class="color-red">*</span></label>
                                                  
                                                    <input  type="file" name="foto" id="foto" class="form-control margin-bottom-20">
                                                </div>
                                             
                                            </div>
                                           
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="skin-minimal">
                                                            <ul class="list">
                                                                <li>
                                                                    <input type="checkbox" id="minimal-checkbox-7">
                                                                    <label for="minimal-checkbox-7">Acepto <a
                                                                            href="#">los términos de servicio</a></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                                    <button type="submit" class="btn btn-theme btn-sm">Actualizar mis datos</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="profile-edit tab-pane fade" id="payment">
                                        <h2 class="heading-md">Administra La Configuración De Tu Paquete</h2>
                                       {{--  <p>A continuación se muestran las opciones de pago para su cuenta.</p> --}}
                                        <br>
                                        <form action="#" id="sky-form" class="sky-form" novalidate>
                                            <!--Checkout-Form-->
                                            <dl class="dl-horizontal">
                                                <dt><strong>Paquete actual</strong></dt>
                                                <dd>
                                                    Reactivación cada hora
                                                </dd>
                                               {{--  <dt><strong>Expiration Date </strong></dt>
                                                <dd>
                                                    2nd January 2017
                                                </dd> --}}
                                            </dl>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 margin-bottom-20">
                                                    <label>Selecciona el paquete al que quieres cambiar<span
                                                            class="color-red">*</span></label>
                                                    <select class="form-control">
                                                        <option value="0">Reactivación cada hora</option>
                                                        <option value="1">Reactivación cada 2 horas</option>
                                                        <option value="2">Reactivación cada 3 horas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="btn btn-sm btn-default" type="button">Cancelar</button>
                                            <button type="submit" class="btn btn-sm btn-theme">Guardar cambios</button>
                                            <!--End Checkout-Form-->
                                        </form>
                                    </div>
                                    <div class="profile-edit tab-pane fade" id="settings">
                                        <h2 class="heading-md">Manage your Notifications.</h2>
                                        <p>Below are the notifications you may manage.</p>
                                        <br>
                                        <form>
                                            <div class="skin-minimal">
                                                <ul class="list">
                                                    <li>
                                                        <input type="checkbox" id="minimal-checkbox-1">
                                                        <label for="minimal-checkbox-1">Send me email notification when
                                                            Ad is processed</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="minimal-checkbox-2">
                                                        <label for="minimal-checkbox-2">Send me email notification when
                                                            user comment</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="minimal-checkbox-3">
                                                        <label for="minimal-checkbox-3">Send me email notification for
                                                            the latest update</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="minimal-checkbox-4">
                                                        <label for="minimal-checkbox-4"> Receive our monthly
                                                            newsletter</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="minimal-checkbox-5">
                                                        <label for="minimal-checkbox-5">Email notification</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="button-group margin-top-20">
                                                <button class="btn btn-sm btn-default" type="button">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Middle Content Area  End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </section>
        <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
        <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
       @include('templates.footer')
        <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
    </div>
    <!-- Main Content Area End -->
    <!-- Post Ad Sticky -->
    <a href="#" class="sticky-post-button hidden-xs">
        <span class="sell-icons">
            <i class="flaticon-photo"></i>
        </span>
        <h4>Publicar</h4>
    </a>
    <!-- Back To Top -->
    <a href="#0" class="cd-top">Top</a>
    <!-- Back To Top -->

    <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core Css  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Jquery Easing -->
    <script src="js/easing.js"></script>
    <!-- Menu Hover  -->
    <script src="js/forest-megamenu.js"></script>
    <!-- Jquery Appear Plugin -->
    <script src="js/jquery.appear.min.js"></script>
    <!-- Numbers Animation   -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Jquery Smooth Scroll  -->
    <script src="js/jquery.smoothscroll.js"></script>
    <!-- Jquery Select Options  -->
    <script src="js/select2.min.js"></script>
    <!-- noUiSlider -->
    <script src="js/nouislider.all.min.js"></script>
    <!-- Carousel Slider  -->
    <script src="js/carousel.min.js"></script>
    <script src="js/slide.js"></script>
    <!-- Image Loaded  -->
    <script src="js/imagesloaded.js"></script>
    <script src="js/isotope.min.js"></script>
    <!-- CheckBoxes  -->
    <script src="js/icheck.min.js"></script>
    <!-- Jquery Migration  -->
    <script src="js/jquery-migrate.min.js"></script>
    <!-- Sticky Bar  -->
    <script src="js/theia-sticky-sidebar.js"></script>
    <!-- Style Switcher -->
    <script src="js/color-switcher.js"></script>
    <!-- Template Core JS -->
    <script src="js/custom.js"></script>
</body>

</html>

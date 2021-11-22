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
                    <li><a href="{{route('cliente.miCuenta')}}">Perfil</a></li>
                    <li><a href="{{route('cliente.misAnuncios')}}">Mis anuncios</a></li>
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
                            <a href="profile.html"><img src="images/users/9.jpg" alt=""></a>
                            <div class="profile-detail">
                                <h6>{{$user->name}}</h6>
                                <ul class="contact-details">
                                    {{-- <li>
                                        <i class="fa fa-map-marker"></i>
                                    </li> --}}
                                    <li>
                                        <i class="fa fa-envelope"></i>{{$user->email}}
                                    </li>
                                    {{-- <li>
                                        <i class="fa fa-phone"></i> 09-999-999-999
                                    </li> --}}
                                </ul>
                            </div>
                            <ul>
                                <li><a href="{{route('cliente.miCuenta')}}">Perfil</a></li>
                                <li class="active"><a href="{{route('cliente.misAnuncios')}}">Mis anuncios <span class="badge">5</span></a>
                                </li>
                                <li><a href="{{route('logout')}}">Cerrar sesión</a></li>
                            </ul>
                        </div>
                        <!-- Categories -->
                       {{--  <div class="widget">
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
                        <div class="row">
                            <!-- Sorting Filters -->
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                <!-- Sorting Filters Breadcrumb -->
                                <!-- Sorting Filters Breadcrumb End -->
                            </div>
                            <!-- Sorting Filters End-->
                            <div class="clearfix"></div>
                            <!-- Ads Archive -->
                            <div class="posts-masonry">
                                <div class="col-md-12 col-xs-12 col-sm-12 user-archives">
                                    <!-- Ads Listing -->

                                    <!-- Ads Listing -->

                                    <!-- Ads Listing -->
                                    @foreach ($anuncios as $anuncio)
                                    <div class="ads-list-archive">
                                        <!-- Image Block -->
                                        <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                            <!-- Img Block -->
                                            <div class="ad-archive-img">
                                                <a href="#">
                                                   {{--  <div class="ribbon expired">Expired</div> --}}
                                                    <img src="{{asset('storage/'.$anuncio->foto)}}" alt="foto">
                                                </a>
                                            </div>
                                            <!-- Img Block -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <!-- Content Block -->
                                       
                                        <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                            <!-- Ad Desc -->
                                            <div class="ad-archive-desc">
                                                <!-- Price -->
                                               {{--  <div class="ad-price">$120</div> --}}
                                                <!-- Title -->
                                                <h3>{{$anuncio->titulo}}</h3>
                                                <!-- Category -->
                                                <div class="category-title"> <span><a href="#">{{$anuncio->categoria->nombre}}</a></span>
                                                </div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p class="hidden-sm">{{$anuncio->descripcion}}
                                                </p>
                                                <!-- Ad Features -->
                                                <ul class="add_info">
                                                    <!-- Contact Details -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                    class="fa fa-phone"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Contacto</h4>

                                                                <strong>Celular</strong> <span
                                                                    class="label label-success">{{$anuncio->telefono}}</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Address -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                    class="fa fa-map-marker"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Dirección</h4>
                                                                {{$anuncio->direccion}}
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                   {{--  <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Condition</strong> <span
                                                                    class="label label-danger">Used</span>
                                                            </div>
                                                        </div>
                                                    </li> --}}
                                                    <!-- Ad Type -->
                                                   {{--  <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                    class="fa fa-check-square-o"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Warrinty</strong> <span
                                                                    class="label label-danger">No </span>
                                                            </div>
                                                        </div>
                                                    </li> --}}
                                                </ul>
                                                <!-- Ad History -->
                                                <div class="clearfix archive-history">
                                                  {{--   <div class="last-updated">Updated: 1 day ago</div> --}}

                                                    <div class="ad-meta">
                                                        <a class="btn save-ad"><i class="fa fa-down"></i>Desactivar</a>
                                                        <a class="btn btn-success"><i class="fa fa-pencil"></i> Editar</a>
                                                        <a class="btn btn-danger"><i class="fa fa-times"></i> Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Desc End -->
                                        </div>
                                      
                                       
                                        <!-- Content Block End -->
                                    </div>
                                    @endforeach
                                    <!-- Ads Listing -->

                                </div>
                            </div>
                            <!-- Ads Archive End -->
                            <div class="clearfix"></div>
                            <!-- Pagination -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <ul class="pagination pagination-lg">
                                    <li> <a href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                                    <li> <a href="#">1</a> </li>
                                    <li class="active"> <a href="#">2</a> </li>
                                    <li> <a href="#">3</a> </li>
                                    <li> <a href="#">4</a> </li>
                                    <li><a href="#"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- Pagination End -->
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

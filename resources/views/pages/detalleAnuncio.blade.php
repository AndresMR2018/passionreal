
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
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/et-line-fonts.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/forest-menu.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
    <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
    <link href="{{asset('css/nouislider.min.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
    <link href="{{asset('css/slider.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/detalleAnuncio.css')}}">
    <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
    <link href="skins/minimal/minimal.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
    <link href="{{asset('css/responsive-media.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="color" href="{{asset('css/colors/defualt.css')}}">
    <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
    <!-- JavaScripts -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
    <script src="https://kit.fontawesome.com/a022389a13.js" crossorigin="anonymous"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body> 
    <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
    {{-- <div class="colored-header">
        <!-- Top Bar -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Header Top Left -->
                    <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                        <ul class="listnone">
                            <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                            <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"
                                        aria-hidden="true"></i> Language <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Swedish</a></li>
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">Russian</a></li>
                                    <li><a href="#">chinese</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Header Top Right Social -->
                    <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                        <div class="pull-right">
                            <ul class="listnone">
                                <li><a href="login.html"><i class="fa fa-sign-in"></i> Log in</a></li>
                                <li><a href="register.html"><i class="fa fa-unlock" aria-hidden="true"></i>
                                        Register</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male"
                                            aria-hidden="true"></i> Umair <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.html">User Profile</a></li>
                                        <li><a href="profile-2.html">User Profile 2</a></li>
                                        <li><a href="archives.html">Archives</a></li>
                                        <li><a href="active-ads.html">Active Ads</a></li>
                                        <li><a href="pending-ads.html">Pending Ads</a></li>
                                        <li><a href="favourite.html">Favourite Ads</a></li>
                                        <li><a href="messages.html">Message Panel</a></li>
                                        <li><a href="deactive.html">Account Deactivation</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- Navigation Menu -->
        <nav id="menu-1" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="index.html"><img src="{{asset('images/logo.png" alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li>
                                    <a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <div class="drop-down grid-col-8">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 3-->
                                            <div class="grid-col-4">
                                                <ul>
                                                    <li><a href="index.html">Home 1 - Default </a></li>
                                                    <li><a href="index-transparent.html">Home 2 (Transparent)</a></li>
                                                    <li><a href="index-2.html">Home 3 (Variation)</a></li>
                                                    <li><a href="index-3.html">Home 4 (Master Slider)</a></li>
                                                </ul>
                                            </div>
                                            <div class="grid-col-4">
                                                <ul>
                                                    <li><a href="index-4.html">Home 5 (With Map Listing)</a></li>
                                                    <li><a href="index-5.html">Home 6 (Modern Style)</a></li>
                                                    <li><a href="index-6.html">Home 7 (Variation)</a></li>
                                                    <li><a href="index-7.html">Home 8 (Category Slider)</a></li>
                                                </ul>
                                            </div>
                                            <div class="grid-col-4">
                                                <ul>
                                                    <li><a href="index-10.html">Home 11 (Modern Home)</a></li>
                                                    <li><a href="index-8.html">Home 9 (Landing Page)</a></li>
                                                    <li><a href="index-9.html">Home 10 (Variation)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Listing <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li>
                                            <a href="javascript:void(0)">Grid Style<i
                                                    class="fa fa-angle-right fa-indicator"></i> <span
                                                    class="label label-info">New</span></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="listing.html">Listing Grid 1</a></li>
                                                <li><a href="listing-1.html">Listing Grid 2</a></li>
                                                <li><a href="listing-2.html">Listing Grid 3</a></li>
                                                <li><a href="listing-7.html">Listing Featured <span
                                                            class="label label-info">New</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">List Style<i
                                                    class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="listing-3.html">List View 1</a></li>
                                                <li><a href="listing-4.html">List View 2</a></li>
                                                <li><a href="listing-5.html">List View 3</a></li>
                                                <li><a href="listing-6.html">List View 4</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Single Ad<i
                                                    class="fa fa-angle-right fa-indicator"></i> <span
                                                    class="label label-info">New</span></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                                <li><a href="single-page-listing-featured.html">Ad (Featured) <span
                                                            class="label label-info">New</span></a></li>
                                                <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                                <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a></li>
                                                <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="icons.html">Classified Icons </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Categories <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">

                                        <li><a href="category-2.html">Modern Variation</a></li>
                                        <li><a href="category-3.html">Minimal Variation</a></li>
                                        <li><a href="category-4.html">Fancy Variation</a></li>

                                        <li><a href="category-6.html">Flat Variation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Dashboard <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="profile.html">User Profile</a></li>
                                        <li><a href="profile-2.html">User Profile 2</a></li>
                                        <li><a href="archives.html">Archives</a></li>
                                        <li><a href="active-ads.html">Active Ads</a></li>
                                        <li><a href="pending-ads.html">Pending Ads</a></li>
                                        <li><a href="favourite.html">Favourite Ads</a></li>
                                        <li><a href="messages.html">Message Panel</a></li>
                                        <li><a href="deactive.html">Account Deactivation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down full width -->
                                    <div class="drop-down grid-col-12">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 2-->
                                            <div class="grid-col-3">
                                                <h4>Blog</h4>
                                                <ul>
                                                    <li><a href="blog.html">Blog With Right Sidebar</a></li>
                                                    <li><a href="blog-1.html">Blog With Masonry Style</a></li>
                                                    <li><a href="blog-2.html">Blog Without Sidebar</a></li>
                                                    <li><a href="blog-details.html">Single Blog </a></li>
                                                    <li><a href="blog-details-1.html">Single Blog (Adsense) </a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 2-->
                                            <div class="grid-col-3">
                                                <h4>Miscellaneous</h4>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="cooming-soon.html">Comming Soon</a></li>
                                                    <li><a href="elements.html">Shortcodes</a></li>
                                                    <li><a href="error.html">404 Page</a></li>
                                                    <li><a href="faqs.html">FAQS</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 2-->

                                            <div class="grid-col-3">
                                                <h4>Others</h4>
                                                <ul>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="site-map.html">Site Map</a></li>
                                                    <li><a href="post-ad-1.html">Post Ad</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 2-->
                                            <div class="grid-col-3">
                                                <h4>Detail Page</h4>
                                                <ul>
                                                    <li><a href="post-ad-2.html">Post Ad 2</a></li>
                                                    <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                                    <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                                    <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a>
                                                    </li>
                                                    <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 2-->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Drop Down <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="#">Item one</a></li>
                                        <li>
                                            <a href="javascript:void(0)">Items Right Side <i
                                                    class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-buysellads"></i> Level
                                                        2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-dashcube"></i> Level 2
                                                        <i class="fa fa-angle-right fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level
                                                        2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-medium"></i> Level 2
                                                        <i class="fa fa-angle-right fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-leanpub"></i> Level 2
                                                        <i class="fa fa-angle-right fa-indicator"></i> </a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Item 2</a></li>
                                        <li>
                                            <a href="javascript:void(0)">Items Left Side <i
                                                    class="fa fa-angle-left fa-indicator"></i> </a>
                                            <!-- add class left-side -->
                                            <ul class="drop-down-multilevel left-side">
                                                <li>
                                                    <a href="#"> <i class="fa fa-forumbee"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-hotel"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-automobile"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level
                                                        2 <i class="fa fa-plus fa-indicator"></i> </a>
                                                    <!--drop down second level-->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-bookmark"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-bell"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-soccer-ball-o"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-life-ring"></i> Level 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Item 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact </a></li>
                            </ul>
                            <ul class="menu-search-bar">
                                <li>
                                    <a href="post-ad-1.html" class="btn btn-light"><i class="fa fa-plus"
                                            aria-hidden="true"></i> Post Free Ad</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </div> --}}
    @include('templates.header2')
    <!-- Navigation Menu End -->
    <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-page">
                        <h1>Detalle del anuncio</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Small Breadcrumb -->
    <div class="small-breadcrumb">
        <div class="container">
            <div class=" breadcrumb-link">
                <ul>
                    <li><a href="{{url('/')}}">Inicio</a></li>
                    <li><a href="{{url('/detalle/'.$anuncio->id)}}">Detalles de anuncio</a></li>
                </ul>
            </div>
        </div>
    </div>
 
    <!-- Small Breadcrumb -->
    <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
    <div class="main-content-area clearfix">
        <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
        <section class="section-padding error-page pattern-bgs gray ">
            <!-- Main Container -->
           <div class="contenedor-general">
               <div class="contenedor-fotos">
                   @foreach ($anuncio->images as $imagen)
                <div class="imagen">
                    <img src="{{$imagen->url}}" alt="foto">
                </div>
                   @endforeach
           
               </div>
               <div class="contenedor-info">
                   <div class="titulo">Acerca de {{$anuncio->user->name}}</div>
                   <div class="detalles">
                   <ul>
                       <li>Categoría:{{$anuncio->categoria->nombre}} </li>
                       <li>Edad: {{$anuncio->edad}}</li>
                       <li>Ciudad: {{$anuncio->ciudad}}</li>
                       <li>Dirección: {{$anuncio->direccion}}</li>
                       <li><i class="fab fa-whatsapp"></i> Teléfono: {{$anuncio->telefono}}</li>
                       <li>Número de vistas: 20</li>
                   </ul>
                   </div>
               
               </div>
           </div>
        <div class="resumen">
            <div class="titulo">{{$anuncio->titulo}}</div>
            <div class="descripcion">{{$anuncio->descripcion}}</div>
        </div>

            <!-- Main Container End -->
        </section>
        <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
        <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
        {{-- <footer>
            <!-- Footer Content -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3  col-sm-6 col-xs-12">
                            <!-- Info Widget -->
                            <div class="widget">
                                <div class="logo"> <img alt="" src="{{asset('images/logo-1.png')}}"> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat
                                    fringilla port.</p>
                                <ul>
                                    <li><img src="{{asset('images/appstore.png')}}" alt=""></li>
                                    <li><img src="{{asset('images/googleplay.png')}}" alt=""></li>
                                </ul>
                            </div>
                            <!-- Info Widget Exit -->
                        </div>
                        <div class="col-md-3  col-sm-6 col-xs-12">
                            <!-- Follow Us -->
                            <div class="widget socail-icons">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li><a class="fb" href=""><i
                                                class="fa fa-facebook"></i></a><span>Facebook</span></li>
                                    <li><a class="twitter" href=""><i
                                                class="fa fa-twitter"></i></a><span>Twitter</span></li>
                                    <li><a class="linkedin" href=""><i
                                                class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                                    <li><a class="googleplus" href=""><i
                                                class="fa fa-google-plus"></i></a><span>Google+</span></li>
                                </ul>
                            </div>
                            <!-- Follow Us End -->
                        </div>
                        <div class="col-md-6  col-sm-6 col-xs-12">
                            <!-- Newslatter -->
                            <div class="widget widget-newsletter">
                                <h5>Singup for Weekly Newsletter</h5>
                                <div class="fieldset">
                                    <p>We may send you information about related events, webinars, products and services
                                        which we believe.</p>
                                    <form>
                                        <input class="" value="Enter your email address" type="text">
                                        <input class="submit-btn" name="submit" value="Submit" type="submit">
                                    </form>
                                </div>
                            </div>
                            <!-- Newslatter -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyrights -->
            <div class="copyrights">
                <div class="container">
                    <div class="copyright-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p>© 2017 AForest All rights reserved. Design by <a
                                        href="http://themeforest.net/user/scriptsbundle/portfolio"
                                        target="_blank">Scriptsbundle</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
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
    <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
    <div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">Email for Price</h3>
                </div>
                <div class="modal-body">
                    <div class="recent-ads">
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="{{asset('storage/'.$anuncio->foto)}}" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 17,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                    </div>
                    <!-- content goes here -->
                    <form>
                        <div class="form-group  col-md-6  col-sm-6">
                            <label>Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group  col-md-6  col-sm-6">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group  col-md-12  col-sm-12">
                            <label>Contact No</label>
                            <input type="text" class="form-control" placeholder="Contact No">
                        </div>
                        <div class="form-group  col-md-12  col-sm-12">
                            <label>Comments</label>
                            <textarea
                                placeholder="What is the price of the Honda Civic 2017 you have in your inventory?"
                                rows="3"
                                class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                        </div>
                        <div class="col-md-12  col-sm-12"> <img src="{{asset('storage/'.$anuncio->foto)}}" alt=""
                                class="img-responsive"> </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                            <button type="submit" class="btn btn-theme btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
    <div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Compartir</h3>
                </div>
                <div class="modal-body">
                    <div class="recent-ads">
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="{{asset('storage/'.$anuncio->foto)}}" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 17,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                    </div>
                    <h3>Key Features</h3>
                    <p>Alarm, Alloy Wheels, Anti-Lock Brakes, Automatic Air Conditioning, Bluetooth Interface Telephone
                        Equipment, Body Coloured Bumpers, Centre Console, Centre Rear Seat Belt, Cloth interior, Cruise
                        Control, Driver Information System</p>
                    <h3>Link</h3>
                    <p><a
                            href="https://themeforest.net/user/scriptsbundle/portfolio">https://themeforest.net/user/scriptsbundle/portfolio</a>
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-fb btn-md"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-twitter btn-md"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-gplus btn-md"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Report Ad Modal =-=-=-=-=-=-= -->
    <div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Why are you reporting this ad?</h3>
                </div>
                <div class="modal-body">
                    <!-- content goes here -->
                    <form>
                        <div class="skin-minimal">
                            <div class="form-group col-md-6 col-sm-6">
                                <ul class="list">
                                    <li>
                                        <input type="radio" id="spam" name="minimal-radio">
                                        <label for="spam">Spam</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="duplicated" name="minimal-radio">
                                        <label for="duplicated">Duplicated</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group  col-md-6 col-sm-6">
                                <ul class="list">
                                    <li>
                                        <input type="radio" id="offensive" name="minimal-radio">
                                        <label for="offensive">Offensive</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="expired" name="minimal-radio" checked>
                                        <label for="expired">Expired</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group  col-md-12 col-sm-12">
                            <label>Comments</label>
                            <textarea placeholder="This ad not belong to me" rows="3"
                                class="form-control">This ad not belong to me</textarea>
                        </div>
                        <div class="col-md-12 col-sm-12"> <img src="{{asset('storage/'.$anuncio->foto)}}" alt="" class="img-responsive">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                            <button type="submit" class="btn btn-theme btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Ad Detail Modal =-=-=-=-=-=-= -->
    {{-- <div class="sticky-ad-detail">
        <div class="container">
            <div class="col-md-7 col-sm-12 col-xs-12 no-padding">
                <div class="">
                    <h3>ASRock H97M PRO4 LGA1150 Quad CrossFireX Motherboard</h3>
                    <div class="short-history">
                        <ul>
                            <li>Published on: <b>07 Oct 2017</b></li>
                            <li>Location: <b>London</b></li>
                            <li>Category: <b><a href="#">Used Cars</a></b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5  col-sm-12 col-xs-12 no-padding">
                <div class="pull-left row">
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <a href="javascript:void(0)" class="btn btn-block pull-left btn-phone number "
                            data-last="111111X"><i class="fa fa-phone"></i> 0320<span>XXXXXXX</span></a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a data-toggle="modal" data-target=".price-quote" href="javascript:void(0)"
                            class="btn btn-block pull-left btn-message"><i class="icon-envelope"></i> Message
                            Seller</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
    <!-- For This Page Only -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVj6yChAfe1ilA4YrZgn_UCAnei8AhQxQ&sensor=false"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            /* ======= Show Number ======= */
            $('.number').click(function() {
                $(this).find('span').text($(this).data('last'));
            });

            /* ======= Ad Location ======= */
            var map = "";
            var latlng = new google.maps.LatLng(47.550259, -122.264847);
            var myOptions = {
                zoom: 13,
                center: latlng,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                size: new google.maps.Size(480, 240)
            }
            map = new google.maps.Map(document.getElementById("itemMap"), myOptions);
            var marker = new google.maps.Marker({
                map: map,
                position: latlng
            });
            /* ======= Ad Detail On Scroll ======= */
            //caches a jQuery object containing the header element
            var header = $(".sticky-ad-detail");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 500) {
                    header.addClass("show-sticky-ad-detail");
                } else {
                    header.removeClass("show-sticky-ad-detail");
                }
            });
        })(jQuery);
    </script>
</body>

</html>

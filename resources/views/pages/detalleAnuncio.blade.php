
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
                    @if(Str::endsWith($imagen->url,'mp4'))
                    <video src="{{$imagen->url}}" width="200" height="200" autoplay muted loop controls></video>
                    @else
                    <img src="{{$imagen->url}}" alt="foto">
                    @endif
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

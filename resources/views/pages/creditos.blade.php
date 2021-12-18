
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
    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>
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
  
    @include('templates.header2')
    <!-- Navigation Menu End -->
    <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-page">
                        <h1>Comprar crédito</h1>
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
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/creditos') }}">Comprar</a></li>
                </ul>
            </div>
        </div>
    </div>

    
    @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" role="alert">
                <span aria-button="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- Small Breadcrumb -->
    <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
    <div class="main-content-area clearfix">
        <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
        <section class="section-padding  gray ">
            <!-- Main Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- end post-padding -->
                        <div class="post-ad-form extra-padding postdetails">
                            <div class="heading-panel">
                                <h3 class="main-title text-left">
                                    Compra créditos
                                </h3>
                            </div>

                            <form method="POST" action="{{route('cliente.pasarela')}}" class="submit-form">
                                <!-- Select Package  -->
                                @csrf
                                <div class="select-package">
                                    <div class="no-padding col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <h3 class="margin-bottom-20">Seleccionar crédito</h3>
                                        {{-- <div class="pricing-list">
                                            <div class="row">
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>10 Créditos gratis para empezar </h3>
                                                    <p>Por la aquisición de cada crédito tendrás la posibilidad de ubicar a tus anuncios en lo más alto.</p>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="pricing-list-price text-center">
                                                        <h4 style="color:green">Gratis</h4>
                                                        
                                                        <a id="1"
                                                            class="btn btn-theme btn-sm btn-block">Seleccionar</a>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div> --}}

                                        {{-- @foreach ($creditos as $credito) --}}
                                        <div class="pricing-list">
                                            @if(Auth::user()->credito_gratis=="0")
                                            <div class="row">
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>
                                                        {{-- {{$credito->cantidad}}  --}}
                                                       10 créditos </h3>
                                                    <p>Por la aquisición de cada crédito tendrás la posibilidad de ubicar a tus anuncios en lo más alto.</p>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="pricing-list-price text-center">
                                                        
                                                        <h2>Gratis</h2>
                                                        {{-- @if($credito->valor==0)
                                                        <h4 style="color:green">Gratis</h4>
                                                        @else
                                                        <h4>€ {{$credito->valor}} c/crédito </h4>
                                                        @endif --}}
                                                        <a  id="0"
                                                        {{-- id="{{$credito->id}}" --}}
                                                            class="btn btn-theme btn-sm btn-block">Seleccionar</a>
                                                    </div>
                                                </div>
                                                
                                                <!-- end col -->
                                            </div>
                                            @else
                                            <h2>No hay cupos gratis disponibles</h2>
                                            @endif
                                            <!-- end row -->
                                        </div>
                                        {{-- @endforeach --}}
                                        <input type="text" id="idcredito" name="idcredito"   style="display: none" >
                                    </div>
                                </div>
                                <div>
                                        <label class="control-label">Créditos <small>Indique la cantidad de créditos a adquirir</small></label>
                                       <input type="number" class="creditos" min="1" max="100" name="creditos" id="creditos">
                                </div>

                                <!-- Featured Ad  -->
                                {{-- <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <label class="control-label">Selecciona la forma de pago <small
                                                class="pull-right"> </small></label>
                                                
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="radio" id="paypal"   name="minimal-radio1" >
                                                    <label for="paypal">Paypal</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="card"   name="minimal-radio2" >
                                                    <label for="card">Tarjeta de débito o crédito</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- end row -->
                                <div class="total" 
                                style="display: flex; justify-content:flex-end; color:black; font-weight:700;"
                                ><p>Total:$<small id="total" style="color:black; font-weight:700;">0</small></p></div>
                                <button type="submit" class="btn btn-theme pull-right">Adquirir créditos</button>
                            </form>
                        </div>
                        <!-- end post-ad-form-->
                    </div>
                    <!-- end col -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
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
                                        <img src="{{ asset('images/car.png') }}" alt="">
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
                        <div class="col-md-12  col-sm-12"> <img src="{{ asset('images/captcha.gif') }}" alt=""
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
                                        <img src="{{ asset('images/car.png') }}" alt="">
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
                        <div class="col-md-12 col-sm-12"> <img src="{{ asset('images/captcha.gif') }}" alt=""
                                class="img-responsive">
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


    <script>

function traer(e){
    var idcredito = document.getElementById('idcredito');
    idcredito.value = e.currentTarget.id;
    console.log('valor de id credito' , idcredito.value);
}
function actualizar(e){
    console.log(e.currentTarget.value);
    $subtotal = e.currentTarget.value * 0.20; //valor del euro
    $total = document.getElementById('total');
    $total.textContent= $subtotal;
}

document.addEventListener('DOMContentLoaded', e => {
    
    document.querySelector('.creditos').addEventListener('change',actualizar);
    // Obtener todos los li y asignar evento
    document.querySelectorAll('.pricing-list-price a').forEach(item => {
        item.addEventListener('click', traer);
    });
});

    </script>
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
    {{-- <script src="js/jquery.smoothscroll.js"></script> --}}
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
    {{-- <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVj6yChAfe1ilA4YrZgn_UCAnei8AhQxQ&sensor=false"></script> --}}
    {{-- <script type="text/javascript">
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
    </script> --}}
</body>

</html>

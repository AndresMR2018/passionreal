@include('templates.head')

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
                        <h1>Pasarela de pagos </h1>
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
                    <li><a class="active" href="{{ route('cliente.pasarela') }}">Pagar créditos</a></li>
                </ul>
            </div>
        </div>
    </div>
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
                    <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                        <!-- end post-padding -->
                        <div class="post-ad-form postdetails">
                            <div class="heading-panel">
                                <h3 class="main-title text-left">
                                    Pagar créditos
                                </h3>
                            </div>

                            <div class="comment-info">
                                <h3 style="text-align:center; color: black; font-weight:700">Carrito</h4>
                                    <img class="pull-left hidden-xs img-circle" src="images/icons/coin-money-5.png"
                                        alt="author">
                                    <div class="author-desc">
                                        <div class="author-title">

                                            <strong>{{$creditos}} Créditos</strong>
                                            <ul class="list-inline pull-right">
                                                <li><a href="#">08-12-2021</a>
                                                </li>
                                                <li><a href="{{ route('cliente.creditos') }}"><i
                                                            class="fa fa-trash"></i> Remover</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                            {{-- <p class="lead">Posting an ad on <a href="#">AdForest</a> is free! However, all
                                ads must follow our rules:</p> --}}
                            <form  method="POST" action="{{route('cliente.comprarCredito') }}">
                                <!-- Title  -->
                                @csrf
                                <input name="idcredito" value="{{$idcredito}}" style="display:none;">
                                <input name="creditos" value="{{$creditos}}" style="display:none;">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <label class="control-label">Nombre completo <small>Ingresa tu nombre
                                                completo</small></label>
                                        <input name="nombre-completo" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">
                                        <label class="control-label">Identificación<small>Ingresa tu número de
                                                identificación</small></label>
                                        <input name="dni" class="form-control" type="text">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">
                                        <label class="control-label">Teléfono<small>Ingresa tu número de
                                                contacto</small></label>
                                        <input name="telefono" class="form-control" type="text">
                                    </div>
                                </div>

                                <!-- Featured Ad  -->
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <label class="control-label">Selecciona la forma de pago</label>
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="radio" id="bank" name="radio" value="1">
                                                    <label for="bank">Tarjeta de crédito</label>
                                                </li>

                                                <li>
                                                    <input type="radio" id="paypal" name="radio" value="2" checked>
                                                    <label for="paypal">Paypal</label>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- <!-- Select Package  -->
                                <div class="select-package">
                                    <div class="no-padding col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <h3 class="margin-bottom-20">Select Package</h3>
                                        <div class="pricing-list">
                                            <div class="row">
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>Free Listing <small>Submit 5 Listings</small></h3>
                                                    <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a
                                                        euismod suspendisse vel, sed quam nulla mauris iaculis.</p>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="pricing-list-price text-center">
                                                        <h4>$0.00</h4>
                                                        <a href="#submit"
                                                            class="btn btn-theme btn-sm btn-block">Select</a>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <div class="pricing-list">
                                            <div class="row">
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>Premium Listing <small>Submit 10 Listings</small></h3>
                                                    <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a
                                                        euismod suspendisse vel, sed quam nulla mauris iaculis.</p>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="pricing-list-price text-center">
                                                        <h4>$2.00</h4>
                                                        <a href="#submit"
                                                            class="btn btn-theme btn-sm btn-block">Select</a>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <div class="pricing-list">
                                            <div class="row">
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>Business Listing <small>Submit Unlimited Projects</small></h3>
                                                    <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a
                                                        euismod suspendisse vel, sed quam nulla mauris iaculis.</p>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="pricing-list-price text-center">
                                                        <h4>$10.00</h4>
                                                        <a href="#submit"
                                                            class="btn btn-theme btn-sm btn-block">Select</a>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div> --}}


                                <!-- end row -->
                                <button type="submit" class="btn btn-theme pull-right">Pagar</button>
                            </form>
                        </div>
                        <!-- end post-ad-form-->
                    </div>
                    <!-- end col -->
                    <!-- Right Sidebar -->
                    <div class="col-md-4 col-xs-12 col-sm-12">
                        <!-- Sidebar Widgets -->
                        <div class="blog-sidebar">
                            <!-- Categories -->
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="panel-title text-center"><a>Resumen </a></h4>
                                </div>
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>N° créditos: {{ $creditos }} </a></h4>
                                </div>
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Subtotal: ${{ $creditos * 0.2 }} </a></h4>
                                </div>
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Total: ${{ $creditos * 0.2 }} </a></h4>
                                </div>
                            </div>


                            <!-- Latest News -->
                        </div>
                        <!-- Sidebar Widgets End -->
                    </div>
                    <!-- Middle Content Area  End -->
                    <!-- end col -->
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
            <i class="flaticon-transport-9"></i>
        </span>
        <h4>SELL</h4>
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
    <!-- For this Page Only -->
    <!-- Ckeditor  -->
    <script src="js/ckeditor/ckeditor.js"></script>
    <!-- Ad Tags  -->
    <script src="js/jquery.tagsinput.min.js"></script>
    <!-- DROPZONE JS  -->
    <script src="js/dropzone.js"></script>
    <script src="js/form-dropzone.js"></script>
    <script type="text/javascript">
        "use strict";

        /*--------- Textarea Ck Editor --------*/
        CKEDITOR.replace('editor1');

        /*--------- Ad Tags --------*/
        $('#tags').tagsInput({
            'width': '100%'
        });

        /*--------- create remove function in dropzone --------*/
        Dropzone.autoDiscover = false;
        var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
        var fileList = new Array;
        var i = 0;
        $("#dropzone").dropzone({
            addRemoveLinks: true,
            maxFiles: 5, //change limit as per your requirements
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            dictMaxFilesExceeded: "Maximum upload limit reached",
            acceptedFiles: acceptedFileTypes,
            url: "uploads",
            dictInvalidFileType: "upload only JPG/PNG",
            init: function() {
                // Hack: Add the dropzone class to the element
                $(this.element).addClass("dropzone");
            }
        });
        (jQuery);
    </script>
    <!-- JS -->
</body>

</html>

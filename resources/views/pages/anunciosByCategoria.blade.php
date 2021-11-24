<!DOCTYPE html>
<html lang="es">
@include('templates.head')

<body>
    <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
    {{-- <div id="loader-wrapper">
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
    {{-- @include('templates.header') --}}

    <!-- Navigation Menu End -->
    <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
    @include('components.banner1280x330',['titulo'=>'Anuncios'])
    <!-- Small Breadcrumb -->
    <div class="small-breadcrumb">
        <div class="container">
            <div class=" breadcrumb-link">
                <ul>
                    <li><a href="{{url('/')}}">Inicio</a></li>
                    <li><a class="active"  href="">Categorías</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Small Breadcrumb -->
    <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
    <div class="main-content-area clearfix">
        <!-- =-=-=-=-=-=-= Featured Listing =-=-=-=-=-=-= -->
        <section class="custom-padding pattern-bg">
            <!-- Main Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    @foreach ($anunciosByCategoria as $anuncio)


                    <!-- Minimal Category -->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <a href="#">
                            <div class="minimal-category">
                                <div class="minimal-img">
                                    <img alt="imagen de categoria" class="img-responsive" src="{{asset('storage').'/'.$anuncio->foto}}">
                                </div>
                                <div class="minimal-overlay"></div>
                                <div class="description">
                                    <span>{{$anuncio->titulo}}</span>
                                    {{-- <div class="ads-count">2,768 Ads</div> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Minimal Category -->
                    @endforeach

                </div>
               {{--  <div class="text-center">
                    <div class="load-more-btn margin-top-30">
                        <button class="btn btn-theme" id="loadMore"> Load More <i class="fa fa-refresh"></i>
                        </button>
                    </div>
                </div> --}}
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </section>
        <!-- =-=-=-=-=-=-= Featured Listing End =-=-=-=-=-=-= -->
        <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
      @include('templates.footer')
        <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
    </div>
    <!-- Main Content Area End -->
    <!-- Post Ad Sticky -->
    <a href="#" class="sticky-post-button">
        <span class="sell-icons">
        <i class="flaticon-photo"></i>
        </span>
        <h4>Publicar</h4>
     </a>
    <!-- Back To Top -->
    <a href="#0" class="cd-top">Top</a>
    <!-- Back To Top -->
    <div class="custom-modal">
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header rte">
                        <h2 class="modal-title">Forgot Your Password ?</h2>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Email</label>
                                <input placeholder="Enter Your Email Adress" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">Reset My Account</button>
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
    <script src={{asset('js/jquery.min.js')}}></script>
    <!-- Bootstrap Core Css  -->
    <script src={{asset('js/bootstrap.min.js')}}></script>
    <!-- Jquery Easing -->
    <script src={{asset('js/easing.js')}}></script>
    <!-- Menu Hover  -->
    <script src={{asset('js/forest-megamenu.js')}}></script>
    <!-- Jquery Appear Plugin -->
    <script src={{asset('js/jquery.appear.min.js?')}}></script>
    <!-- Numbers Animation   -->
    <script src={{asset('js/jquery.countTo.js')}}></script>
    <!-- Jquery Smooth Scroll  -->
    <script src={{asset('js/jquery.smoothscroll.js')}}></script>
    <!-- Jquery Select Options  -->
    <script src={{asset('js/select2.min.js')}}></script>
    <!-- noUiSlider -->
    <script src="{{asset('js/nouislider.all.min.js')}}"></script>
    <!-- Carousel Slider  -->
    <script src="{{asset('js/carousel.min.js')}}"></script>
    <script src="{{asset('js/slide.js')}}"></script>
    <!-- Image Loaded  -->
    <script src="{{asset('js/imagesloaded.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <!-- CheckBoxes  -->
    <script src="{{asset('js/icheck.min.js')}}"></script>
    <!-- Jquery Migration  -->
    <script src="{{asset('js/jquery-migrate.min.js')}}"></script>
    <!-- Sticky Bar  -->
    <script src="{{asset('js/theia-sticky-sidebar.js')}}"></script>
    <!-- Style Switcher -->
    <script src="{{asset('js/color-switcher.js')}}"></script>
    <!-- Template Core JS -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            $(".minimal-category").slice(0, 12).show();
            $("#loadMore").on('click', function(e) {
                e.preventDefault();
                $(".minimal-category:hidden").slice(0, 4).slideDown();
                if ($(".minimal-category:hidden").length == 0) {
                    $("#load").fadeOut('slow');
                }
                $('html,body').animate({
                    scrollTop: $(this).offset().top
                }, 1500);
            });
        })(jQuery);
    </script>
</body>

</html>

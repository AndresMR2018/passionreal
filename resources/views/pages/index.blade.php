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
    <!-- =-=-=-=-=-=-= Transparent Header =-=-=-=-=-=-= -->
    @include('templates.header2')

    @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" role="alert">
                <span aria-button="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- Navigation Menu End -->
    <!-- =-=-=-=-=-=-= Transparent Header =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Home Banner 2 =-=-=-=-=-=-= -->
    @include('components.banner1280x800')
    <!-- =-=-=-=-=-=-= Home Banner 2 End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
    <div class="main-content-area clearfix">
        <!-- =-=-=-=-=-=-= Popular Categories =-=-=-=-=-=-= -->
        <section class="custom-padding gray">
            <!-- Main Container -->
            {{-- @include('components.categories') --}}
            <!-- Main Container End -->
        </section>
        <!-- =-=-=-=-=-=-= Popular Categories End =-=-=-=-=-=-= -->
        <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
        {{-- @include('components.anuncios_destacados') --}}
        <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->
        <!-- =-=-=-=-=-=-= Trending Ads =-=-=-=-=-=-= -->
        <section class="custom-padding gray">
            <!-- Main Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <!-- Heading Area -->
                    <div class="heading-panel">
                        <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                            <!-- Main Title -->
                            <h1>Últimos <span class="heading-color">Anuncios </span>Más Recientes</h1>
                            <!-- Short Description -->
                            <p class="heading-text">Aquí encontraras el libido que tanto estabas buscando</p>
                        </div>
                    </div>
                    <!-- Middle Content Box -->
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <ul class="list-unstyled">
                            <!-- Listing Grid -->
                            <li>
                                @foreach ($anuncios as $anuncio)
                                    <div class="well ad-listing clearfix">
                                        <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                            <!-- Image Box -->
                                            <div class="img-box">
                                             
                                           
                                                <img src="{{asset('storage/'.$anuncio->foto)}}" class="img-responsive" alt="">
                                          
                                                <div class="total-images"><strong>8</strong> fotos </div>
                                                <div class="quick-view"> <a href="#ad-preview" data-toggle="modal"
                                                        class="view-button"><i class="fa fa-search"></i></a> </div>
                                            </div>
                                            <!-- Ad Status --><span class="ad-status"> Top </span>
                                            <!-- User Preview -->
                                            <div class="user-preview">
                                                <a href="{{url('/detalle/'.$anuncio->id)}}"> <img src="{{asset('storage').'/'.$anuncio->foto}}" class="avatar avatar-small"
                                                        alt="foto"> </a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-7 col-xs-12">
                                            <!-- Ad Content-->
                                            <div class="row">
                                                <div class="content-area">
                                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                                        <!-- Category Title -->
                                                        <div class="category-title"> <span><a href="#">{{$anuncio->categoria->nombre}}</a></span>
                                                        </div>
                                                        <!-- Ad Title -->
                                                        <h3><a href="{{url('/detalle/'.$anuncio->id)}}">{{$anuncio->titulo}}</a></h3>
                                                        <!-- Info Icons -->
                                                        <ul class="additional-info pull-right">
                                                            <li>
                                                                <a data-toggle="tooltip" title="Enviar whatsapp"
                                                                    href="#" class="fa fa-whatsapp"></a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="tooltip" title="Contactar" href="#"
                                                                    class="fa fa-phone"></a>
                                                            </li>
                                                            {{-- <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li> --}}
                                                        </ul>
                                                        <!-- Ad Meta Info -->
                                                        <ul class="ad-meta-info">
                                                            <li> <i class="fa fa-map-marker"></i><a href="#">{{$anuncio->ciudad}}</a>
                                                            </li>
                                                            <li> <i class="fa fa-user"></i>{{$anuncio->user->name}}</li>
                                                        </ul>
                                                        <!-- Ad Description-->
                                                        <div class="ad-details">
                                                            <p>
                                                               {{$anuncio->descripcion}}</p>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 col-sm-12">
                                                        <!-- Ad Stats -->
                                                        <div class="short-info">
                                                            <div class="ad-stats hidden-xs"><span>Edad : </span>{{$anuncio->edad}}
                                                            </div>
                                                            <div class="ad-stats hidden-xs"><span>Dirección :
                                                                </span>{{$anuncio->direccion}}</div>

                                                        </div>
                                                        <!-- Price -->
                                                        {{-- <div class="price"> <span>$00,00</span> </div> --}}
                                                        <!-- Ad View Button -->
                                                        <a href="{{url('/detalle/'.$anuncio->id)}}" class="btn btn-block btn-success"><i
                                                                class="fa fa-eye" aria-hidden="true"></i> Ver
                                                            más</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Content End -->
                                        </div>
                                    </div>
                                @endforeach

                            </li>


                        </ul>
                        <div class="text-center">
                            <ul class="pagination ">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Middle Content Box End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </section>
        <!-- =-=-=-=-=-=-= Trending Ads End =-=-=-=-=-=-= -->
        <!-- =-=-=-=-=-=-= Featured Ad Parallex =-=-=-=-=-=-= -->
        <section class="parallex bg-3 featured-ads">
            <div class="container">
                {{-- <!-- Container -->
                <div class="container">
                    <div class="col-md-8 col-sm-6 no-padding">
                        <div class="app-text-section">
                            <h5>Featured Ads</h5>
                            <h3>Get more exposure </h3>
                            <ul>
                                <li>Find nearby cars in your network with Scholar</li>
                                <li>Browse real hirers reviews to know why choose Scholar</li>
                                <li>Rent a car so easy with a tap !</li>
                                <li>Rent a car so easy with a tap !</li>
                            </ul>
                            <button class="btn btn-lg btn-theme"> Join Us now <i class="fa fa-refresh"></i> </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 no-padding">
                        <div class="pricing-fancy ">
                            <div class="icon-bg"><i class="flaticon-money-2"></i></div>
                            <h3><strong>Featured</strong> <span class="thin">Ads</span></h3>
                            <div class="price-box">
                                <div class="price-large"> <span class="dollartext">$</span>1.99<span
                                        class="monthtext">/month</span> </div>
                                <p>Regulary <del>$5.00</del></p>
                                <a href="#" class="btn btn-lg btn-theme">Submit Featured Ad</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container /- --> --}}
            </div>
        </section>
        <!-- =-=-=-=-=-=-= Featured Ad Parallex End =-=-=-=-=-=-= -->
        <!-- =-=-=-=-=-=-= Blog Section =-=-=-=-=-=-= -->
        {{-- <section class="custom-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Content Box -->
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>Latest <span class="heading-color"> Blog</span> Post</h1>
                        <!-- Short Description -->
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                        <!-- Blog Post-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-post">
                              <div class="post-img">
                                 <a href="#"> <img class="img-responsive" alt="" src="images/blog/1.jpg"> </a>
                              </div>
                              <div class="post-info"> <a href="">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                              <h3 class="post-title"> <a href="#"> Sony Xperia XZ: Release date and everything you need to know</a> </h3>
                              <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                           </div>
                        </div>
                        <!-- Blog Post-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-post">
                              <div class="post-img">
                                 <a href="#"> <img class="img-responsive" alt="" src="images/blog/2.jpg"> </a>
                              </div>
                              <div class="post-info"> <a href="">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                              <h3 class="post-title"> <a href="#"> Review of the 2017 Honda Accord Sport </a> </h3>
                              <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                           </div>
                        </div>
                        <!-- Blog Post-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-post">
                              <div class="post-img">
                                 <a href="#"> <img class="img-responsive" alt="" src="images/blog/3.jpg"> </a>
                              </div>
                              <div class="post-info"> <a href="">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                              <h3 class="post-title"> <a href="#"> How to Buy a House 6 Must-Dos Before Buying A Home</a> </h3>
                              <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section> --}}
        <!-- =-=-=-=-=-=-= Blog Section End =-=-=-=-=-=-= -->
        <!-- =-=-=-=-=-=-= App Download Section =-=-=-=-=-=-= -->
        {{-- @include('components.publicidad') --}}
        <!-- =-=-=-=-=-=-= App Download Section End =-=-=-=-=-=-= -->
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
                    <!-- content goes here -->
                    <form>
                        <div class="form-group  col-md-6">
                            <label>Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group  col-md-6">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group  col-md-12">
                            <label>Contact No</label>
                            <input type="text" class="form-control" placeholder="Contact No">
                        </div>
                        <div class="form-group  col-md-12">
                            <label>Comments</label>
                            <textarea
                                placeholder="What is the price of the Honda Civic 2017 you have in your inventory?"
                                rows="3"
                                class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                        </div>
                        <div class="col-md-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 margin-bottom-20 margin-top-20">
                            <button type="submit" class="btn btn-theme btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- VISTA PREVIA DEL PRODUCTO CON LA LUPA -->
    <div class="quick-view-modal modalopen" id="ad-preview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg ad-modal">
            <button class="close close-btn popup-cls" aria-label="Close" data-dismiss="modal" type="button"> <i
                    class="fa-times fa"></i> </button>
            <div class="modal-content single-product">
                <div class="diblock">
                    <div class="col-lg-7 col-sm-12 col-xs-12">
                        <div class="clearfix"></div>
                        <div class="flexslider single-page-slider">
                            <div class="flex-viewport">
                                {{-- <ul class="slides slide-main">
                                    <li class=""><img alt="" src="{{asset('storage/'.$anuncio->foto)}}" title="">
                                    </li>
                                    <li><img alt="" src="{{asset('storage/'.$anuncio->foto)}}" title=""></li>
                                    <li class="flex-active-slide"><img alt="" src="{{asset('storage/'.$anuncio->foto)}}" title="">
                                    </li>
                                    <li><img alt="" src="{{asset('storage/'.$anuncio->foto)}}" title=""></li>
                                    <li><img alt="" src="{{asset('storage/'.$anuncio->foto)}}" title=""></li>
                                    <li><img alt="" src="{{asset('storage/'.$anuncio->foto)}}" title=""></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="flexslider" id="carousels">
                            <div class="flex-viewport">
                                {{-- <ul class="slides slide-thumbnail">
                                    <li><img alt="" draggable="false" src="{{asset('storage/'.$anuncio->foto)}}"></li>
                                    <li><img alt="" draggable="false" src="{{asset('storage/'.$anuncio->foto)}}"></li>
                                    <li class="flex-active-slide"><img alt="" draggable="false"
                                            src="{{asset('storage/'.$anuncio->foto)}}"> </li>
                                    <li><img alt="" draggable="false" src="{{asset('storage/'.$anuncio->foto)}}"></li>
                                    <li><img alt="" draggable="false" src="{{asset('storage/'.$anuncio->foto)}}"></li>
                                    <li><img alt="" draggable="false" src="{{asset('storage/'.$anuncio->foto)}}"></li>
                                    <!-- items mirrored twice, total of 12 -->
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class=" col-sm-12 col-lg-5 col-xs-12">
                        <div class="summary entry-summary">
                            <div class="ad-preview-details">
                                <a href="#">
                                    <h4>{{$anuncio->titulo}}</h4>
                                </a>
                                
                                <div class="clearfix"></div>
                                <p>{{$anuncio->descripcion}}</p>
                                <ul class="car-info col-md-6 col-sm-6">
                                    <li>
                                        <span>Publicado:</span>
                                        <p>{{$anuncio->created_at}}</p>
                                    </li>
                                    <li>
                                       <span>Edad:</span>
                                       <p>{{$anuncio->edad}}</p>
                                   </li>
                                    <li>
                                        <span>Ciudad:</span>
                                        <p>{{$anuncio->ciudad}}</p>
                                    </li>
                                    <li>
                                       <span>Teléfono:</span>
                                       <p>{{$anuncio->telefono}}</p>
                                   </li>
                                   
                                </ul>
                                <ul class="ad-preview-info col-md-6 col-sm-6">
                                    
                                    
                                  
                                   
                                   
                                </ul>
                                <a href="{{url('/detalle/'.$anuncio->id)}}">
                                 <button class="btn btn-theme btn-block" type="submit">Contactar</button>
                                </a>
                               
                            </div>
                        </div>
                        <!-- .summary -->
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- / Product Preview Popup -->
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

<!DOCTYPE html>
<html lang="es">

@include('templates.head')

<link rel="stylesheet" href="{{ asset('css/paginador.css') }}">

<body>

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


                                                <img src="{{ $anuncio->images->pluck('url')[0] }}"
                                                    class="img-responsive" alt="">



                                                <div class="total-images">
                                                    <strong>{{ count($anuncio->images) }}</strong> fotos </div>
                                                <div class="quick-view"> <a href="#ad-preview{{$anuncio->id}}" data-toggle="modal"
                                                        class="view-button"><i class="fa fa-search"></i></a> </div>
                                            </div>
                                            <!-- Ad Status --><span class="ad-status"> Top </span>
                                            <!-- User Preview -->
                                            <div class="user-preview">
                                                <a href="{{route('home.detalle',$anuncio->id) }}"> <img
                                                        src="{{ $anuncio->images->pluck('url')[0] }}"
                                                        class="avatar avatar-small" alt="foto"> </a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-7 col-xs-12">
                                            <!-- Ad Content-->
                                            <div class="row">
                                                <div class="content-area">
                                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                                        <!-- Category Title -->
                                                        <div class="category-title"> <span><a
                                                                    href="#">{{ $anuncio->categoria->nombre }}</a></span>
                                                        </div>
                                                        <!-- Ad Title -->
                                                        <h3><a
                                                                href="{{ route('home.detalle',$anuncio->id)}}">{{ $anuncio->titulo }}</a>
                                                        </h3>
                                                        <!-- Info Icons -->
                                                        <ul class="additional-info pull-right">
                                                            <li>
                                                                <a data-toggle="tooltip" title="Enviar whatsapp"
                                                                    href="tel:{{$anuncio->telefono}}" class="fab fa-whatsapp"></a>
                                                            </li>
                                                            {{-- <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li> --}}
                                                        </ul>
                                                        <!-- Ad Meta Info -->
                                                        <ul class="ad-meta-info">
                                                            <li> <i class="fa fa-map-marker"></i><a
                                                                    href="#">{{ $anuncio->ciudad }}</a>
                                                            </li>
                                                            <li> <i
                                                                    class="fa fa-user"></i>{{ $anuncio->user->name }}
                                                            </li>
                                                            @if ($anuncio->user->cta_validada == 'Si')
                                                                <li title="Cuenta verificada"><i
                                                                        class="fas fa-user-check"></i></li>
                                                            @else
                                                                <li title="Cuenta no verificada"><i
                                                                        class="fas fa-user-times"></i></li>
                                                            @endif
                                                        </ul>
                                                        <!-- Ad Description-->
                                                        <div class="ad-details">
                                                            <p>
                                                                {{ $anuncio->descripcion }}</p>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 col-sm-12">
                                                        <!-- Ad Stats -->
                                                        <div class="short-info">
                                                            <div class="ad-stats hidden-xs"><span>Edad :
                                                                </span>{{ $anuncio->edad }} años
                                                            </div>
                                                            <div class="ad-stats hidden-xs"><span>Dirección :
                                                                </span>{{ $anuncio->direccion }}</div>
                                                        </div>
                                                        <!-- Price -->
                                                        {{-- <div class="price"> <span>$00,00</span> </div> --}}
                                                        <!-- Ad View Button -->
                                                        <a href="{{route('home.detalle',$anuncio->id)}}"
                                                            class="btn btn-block btn-success"><i class="fa fa-eye"
                                                                aria-hidden="true"></i> Ver
                                                            más</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Content End -->
                                        </div>
                                    </div>

   <!-- VISTA PREVIA DEL PRODUCTO CON LA LUPA -->
   <div class="quick-view-modal modalopen" id="ad-preview{{$anuncio->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg ad-modal">
        <button class="close close-btn popup-cls" aria-label="Close" data-dismiss="modal" type="button"> <i
                class="fa-times fa"></i> </button>
        <div class="modal-content single-product">
            <div class="diblock">
                <div class="col-lg-7 col-sm-12 col-xs-12">
                    <div class="clearfix"></div>
                    <div class="flexslider single-page-slider">
                        <div class="flex-viewport">
                            <ul class="slides slide-main">
                            
                                @foreach($anuncio->images as $imagen)
                                <li class=""><img alt="" src="{{ $imagen->url }}" title="">
                                </li>
                                @endforeach
                                {{-- <li class=""><img alt="" src="{{asset('storage/'.$anuncio->foto)}}" title="">
                                </li>
                                <li class="flex-active-slide"><img alt="" src="{{asset('storage/'.$anuncio->foto)}}" title="">
                                </li> --}}
                               
                            </ul>
                        </div>
                    </div>
                    <div class="flexslider" id="carousels">
                        <div class="flex-viewport">
                            <ul class="slides slide-thumbnail">
                                @foreach($anuncio->images as $imagen)
                                <li><img alt="" draggable="false" src="{{$imagen->url}}"></li>
                                {{-- <li class="flex-active-slide"><img alt="" draggable="false"
                                        src="{{$imagen->url}}"></li> --}}
                                        @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-lg-5 col-xs-12">
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
                            <a href="{{route('home.detalle',$anuncio->id)}}">
                             <button class="btn btn-theme btn-block" type="submit">Contactar</button>
                            </a>
                           
                        </div>
                    </div>
                    <!-- .summary -->
                </div>
            </div>
        </div>
    </div>
</div>

                                @endforeach
                            </li>
                        </ul>
                        <div class="text-center">
                            {!! $anuncios->links() !!}
                        </div>
                    </div>
                    <!-- Middle Content Box End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </section>
      
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

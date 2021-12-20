<!DOCTYPE html>
<html lang="es">
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
                        <h1>Detalles del anuncio </h1>
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
                    <li><a href="{{ route('home.inicio') }}">Inicio</a></li>
                    <li><a href="">Detalles del anuncio</a></li>
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
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <!-- =-=-=-=-=-=-= Advertizing Sidebar =-=-=-=-=-=-= -->
                    <div class="col-md-2 col-sm-2  hidden-xs hidden-sm  leftbar-stick">
                        <div class="theiaStickySidebar"> <img alt="" src="{{ asset('images/160x600.png') }}"> </div>

                    </div>

                    <!-- Middle Content Area -->
                    <div class="col-md-8 col-xs-12 col-sm-12">
                        <!-- Single Ad -->
                        <div class="single-ad">
                            <!-- Title -->
                            <div class="ad-box">
                                <h1>{{ $anuncio->titulo }}</h1>
                                <div class="short-history">
                                    <ul>
                                        <li>Nombre: <b>{{ $anuncio->user->name }}</b></li>
                                        <li>Categoría: <b><a href="#">{{ $anuncio->categoria->nombre }}</a></b></li>
                                        <li>Dirección: <b>{{ $anuncio->direccion }}</b></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Listing Slider  -->
                            <div class="flexslider single-page-slider">
                                <div class="flex-viewport">
                                    <ul class="slides slide-main">
                                        @foreach ($anuncio->images as $imagen)
                                        <li class=""><img alt="" src="{{ $imagen->url }}" title="">
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Listing Slider Thumb -->
                            <div class="flexslider" id="carousels">
                                <div class="flex-viewport">
                                    <ul class="slides slide-thumbnail">
                                        @foreach ($anuncio->images as $imagen)
                                        <li><img alt="" draggable="false" src="{{ $imagen->url }}"></li>

                                        @endforeach

                                        <!-- items mirrored twice, total of 12 -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Share Ad  -->
                            <div class="ad-share text-center">
                                <div data-toggle="modal" data-target=".share-ad"
                                    class="ad-box col-md-4 col-sm-4 col-xs-12">
                                    <i class="fa fa-share-alt"></i> <span class="hidetext">Compartir</span>
                                </div>
                                <a class="ad-box col-md-4 col-sm-4 col-xs-12" href="tel:{{$anuncio->telefono}}"><i
                                        class="fa fa-phone active"></i>
                                    <span class="hidetext">Contactar</span></a>
                                <div data-target=".report-quote" data-toggle="modal"
                                    class="ad-box col-md-4 col-sm-4 col-xs-12">
                                    <i class="fa fa-warning"></i> <span class="hidetext">Reportar</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <!-- Short Description  -->
                            <div class="ad-box">
                                <div class="short-features">
                                    <!-- Heading Area -->
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            Descripción
                                        </h3>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-xs-12 no-padding">
                                        <span><strong></strong></span> {{ $anuncio->descripcion }}
                                    </div>

                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Ciudad</strong>:</span> {{ $anuncio->ciudad }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Edad</strong> :</span> {{ $anuncio->edad }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Contacto</strong> :</span>{{ $anuncio->telefono }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Publicado</strong> :</span>{{ $anuncio->created_at }}
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div class="col-md-2 col-sm-2 hidden-xs hidden-sm rightbar-stick">
                        <div class="theiaStickySidebar"> <img alt="" src="{{ asset('images/160x600.png') }}"> </div>
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

    <!-- Back To Top -->
    <a href="#0" class="cd-top">Top</a>

    <!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
    <div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span
                            class="sr-only">Close</span></button>
                    <h3 class="modal-title">Compartir</h3>
                </div>
                <div class="modal-body">
                    <div class="recent-ads">
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="{{URL::asset('images/car.png')}}" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Titulo anuncio</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">Direccion del anuncio</a>,</li>
                                        <li><a href="#">Ubicacion</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">

                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                    </div>
                    <h3>Descripcion</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                    <h3>Enlace</h3>
                    <p><a href="{{request()->fullUrl()}}">{{request()->fullUrl()}}</a></p>
                </div>
                <div class="modal-footer">
                    <a target="_blank"
                        href="http://www.facebook.com/sharer.php?u={{request()->fullUrl()}}&t=Pasionreal.com"
                        target="_blank" class="btn btn-fb btn-md"><i class="fab fa-facebook"></i></a>
                    <a target="_blank"
                        href="https://twitter.com/intent/tweet?url={{request()->fullUrl()}}&text={{$anuncio->titulo}}&via={{config('app.name,Pasionreal.es')}}&hashtags={{config('app.name,Pasionreal.es')}}"
                        class="btn btn-twitter btn-md"><i class="fab fa-twitter"></i></a>
                    <a style="background-color:#25DB30!important" target="_blank"
                        href="https://api.whatsapp.com/send?text={{request()->fullUrl()}}  ,  {{$anuncio->descripcion}}"
                        class="btn btn-gplus btn-md"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- =-=-=-=-=-=-= Report Ad Modal =-=-=-=-=-=-= -->
    <div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only">Close</span></button>
                    <h3 class="modal-title">Porqué razón quieres reportar este anuncio?</h3>
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
                                        <label for="duplicated">No asiste a los encuentros</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <ul class="list">
                                    <li>
                                        <input type="radio" id="spam" name="minimal-radio">
                                        <label for="spam">Duplicación de identidad</label>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="form-group  col-md-12 col-sm-12">
                            <label>Agrega un comentario</label>
                            <textarea placeholder="El contenido del anuncio me pertenece..." rows="3"
                                class="form-control">El contenido del anuncio me pertenece...</textarea>
                        </div>
                        <div class="col-md-12 col-sm-12"> <img src="{{ URL::asset('images/captcha.gif') }}" alt=""
                                class="img-responsive"> </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                            <button type="submit" class="btn btn-theme btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    @include('templates.scripts')
</body>

</html>
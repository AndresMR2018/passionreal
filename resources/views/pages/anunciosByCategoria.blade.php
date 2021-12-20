<!DOCTYPE html>
<html lang="es">
@include('templates.head')

<body>

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
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a class="active" href="">Categorías</a></li>
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
                                    <img alt="imagen de categoria" class="img-responsive"
                                        src="{{ $anuncio->images->pluck('url')[0] }}">
                                </div>
                                <div class="minimal-overlay"></div>
                                <div class="description">
                                    <span>{{ $anuncio->titulo }}</span>
                                    {{-- <div class="ads-count">2,768 Ads</div> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Minimal Category -->
                    @endforeach

                </div>

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
    <!-- SCRIPTS -->
    @include('templates.scripts')
</body>

</html>
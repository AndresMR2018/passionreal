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

                                            <strong>{{$creditosx}} Créditos</strong>
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
                            <form method="POST" action="{{route('cliente.comprarCredito') }}">
                                <!-- Title  -->
                                @csrf
                                <input name="idcredito" value="{{$idcredito}}" style="display:none;">
                                <input name="creditos" value="{{$creditosx}}" style="display:none;">
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
                                    <h4 class="panel-title"><a>N° créditos: {{ $creditosx }}</a></h4>
                                </div>
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Subtotal: ${{ $creditosx * 0.2 }} </a></h4>
                                </div>
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Total: ${{ $creditosx * 0.2 }} </a></h4>
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
    <!-- SCRIPTS -->
    @include('templates.scripts')
</body>

</html>
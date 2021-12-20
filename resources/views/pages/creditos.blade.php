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
                                        {{-- @foreach ($creditos as $credito) --}}
                                        <div class="pricing-list">
                                            @if(Auth::user()->credito_gratis=="0")
                                            <div class="row">
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>
                                                        {{-- {{$credito->cantidad}} --}}
                                                        10 créditos </h3>
                                                    <p>Por la aquisición de cada crédito tendrás la posibilidad de
                                                        ubicar a tus anuncios en lo más alto.</p>
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
                                                        <a id="0" {{-- id="{{$credito->id}}" --}}
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
                                        <input type="text" id="idcredito" name="idcredito" style="display: none">
                                    </div>
                                </div>
                                <div>
                                    <label class="control-label">Créditos <small>Indique la cantidad de créditos a
                                            adquirir</small></label>
                                    <input type="number" class="creditos" min="1" max="100" name="creditos"
                                        id="creditos">
                                </div>

                                <div class="total"
                                    style="display: flex; justify-content:flex-end; color:black; font-weight:700;">
                                    <p>Total:$<small id="total" style="color:black; font-weight:700;">0</small></p>
                                </div>
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

    @include('templates.scripts')
</body>

</html>
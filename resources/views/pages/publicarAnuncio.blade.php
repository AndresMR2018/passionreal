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
        <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
        <link href="skins/minimal/minimal.css" rel="stylesheet">
        <!-- =-=-=-=-=-=-= For This Page Only =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="css/dropzone.css">
        <link href="css/jquery.tagsinput.min.css" rel="stylesheet">
        <!-- JavaScripts -->
        <script src="js/modernizr.js"></script>
        <script src="https://kit.fontawesome.com/a022389a13.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <h1>Publicar anuncio</h1>
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
                    <li><a href="{{url('/publicar-anuncio')}}">Publicar anuncio</a></li>
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
                    <div class="col-md-12">
                        <!-- end post-padding -->
                        <div class="post-ad-form extra-padding postdetails">
                            <div class="heading-panel">
                                <h3 class="main-title text-left">
                                    Publique su anuncio
                                </h3>
                            </div>
                            
                            @if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" role="alert">
<span aria-button="true">&times;</span>
</button>
</div>
@endif
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
<ul>
@foreach($errors->all() as $error)
<li>
{{$error}}
</li>
@endforeach
</ul>
</div>
@endif
                            <p class="lead">Publicar un anuncio en <a href="#">Pasionreal.com</a> es gratis! Sin embargo,
                                todos los anuncios deben seguir nuestras reglas:</p>
                            <form class="submit-form" action="{{route('cliente.guardarAnuncio')}}" method="POST" enctype="multipart/form-data">
                                <!-- Title  -->
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <label class="control-label">Titulo para el anuncio <small>Ingresar un título para tu anuncio</small></label>
                                        <input class="form-control" name="titulo" placeholder="Ponle un titulo llamativo a tu anuncio"
                                            type="text">
                                    </div>
                                </div>
                                  <!-- Ad Description  -->
                                  <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                        <label class="control-label">Descripción para el anuncio <small>Ingresar una descripción para tu anuncio </small></label>
                                        <textarea  rows="4" class="form-control" name="descripcion"
                                            placeholder="Utiliza este espacio para decir cómo eres, describir tu cuerpo, mencionar tus destrezas y expresar tus gustos..."></textarea>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <!-- Category  -->
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                        <label class="control-label">Categoría <small>Selecciona la categoría para tu anuncio</small></label>
                                        <select class="category form-control" name="categoria_id">
                                            <option label="Select Option"></option>
                                            @foreach ($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Ciudad  -->
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                        <label class="control-label">Ciudad <small>Selecciona una ciudad para tu anuncio</small></label>
                                        <select class="category form-control" name="ciudad">
                                            <option label="Select Option"></option>
                                            <option value="Quito">Quito</option>
                                            <option value="Esmeraldas">Esmeraldas</option>
                                            <option value="Riobamba">Riobamba</option>
                                            <option value="Cuenca">Cuenca</option>
                                            <option value="Guayaquil">Guayaquil</option>
                                            <option value="Ambato">Ambato</option>
                                            <option value="Ibarra">Ibarra</option>
                                            <option value="Latacunga">Latacunga</option>
                                            <option value="Loja">Loja</option>
                                            <option value="Machala">Machala</option>
                                            <option value="Salinas">Salinas</option>
                                            <option value="Portoviejo">Portoviejo</option>
                                            <option value="Durán">Durán</option>
                                            <option value="Manta">Manta</option>
                                            <option value="Sangolqui">Sangolqui</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                        <label class="control-label">Zona/distrito/barrio </label>
                                        <input class="form-control" name="zona" 
                                            value="">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                      
                                            <label class="control-label">Dirección </label>
                                            <input class="form-control" name="direccion" id="direccion"
                                                value="">
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                        <label class="control-label">Paquete <small>Selecciona el paquete para tu anuncio</small></label>
                                        <select class="category form-control">
                                            <option label="Select Option"></option>
                                            @foreach ($paquetes as $paquete)
                                            <option value="{{$paquete->id}}">Reactivación cada {{$paquete->periodo_horas}} horas</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="row">
                                <!-- end row -->
                                <!-- Image Upload  -->
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <label class="control-label">Fotos para tu anuncio <small>Por favor agrega imagenes para tu anuncio.</small></label>
                                        <input class="dropify" type="file" name="images[]" id="images" multiple required>
                                    </div>

                                </div>
                                <!-- end row -->
                              
                                <!-- Ad Tags  -->
                               
                                <!-- end row -->
                                <!-- Ad Type  -->
                                {{-- <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <label class="control-label">Type Of Ad<small>want to buy or
                                                sale</small></label>
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input tabindex="7" type="radio" id="minimal-radio-1"
                                                        name="minimal-radio">
                                                    <label for="minimal-radio-1">I want to sell </label>
                                                </li>
                                                <li>
                                                    <input tabindex="8" type="radio" id="minimal-radio-2"
                                                        name="minimal-radio" checked>
                                                    <label for="minimal-radio-2">I want to buy</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- Ad Condition  -->
                                {{-- <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <label class="control-label">Condition<small>Item Condition</small></label>
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="radio" id="new" name="minimal-radio">
                                                    <label for="new">New</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="used" name="minimal-radio" checked>
                                                    <label for="used">Used</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                        <label class="control-label">Tu edad</label>
                                        <input class="form-control" name="edad" placeholder="" type="text">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                        <label class="control-label">Tu teléfono<small></small></label>
                                        <input class="form-control" name="telefono" placeholder=""
                                            type="tel">
                                    </div>
                                </div>
                                <!-- end row -->
                                {{-- <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                        <label class="control-label">Mobile Number<small>number for
                                                conformation</small></label>
                                        <input class="form-control" placeholder="eg +92-0321-123-456-789"
                                            type="text">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                        <label class="control-label">Address<small>your permanent
                                                address</small></label>
                                        <input class="form-control" placeholder="eg House no 8 Streent no 2 New York"
                                            type="text">
                                    </div>
                                </div> --}}
                                <!-- Select Package  -->
                                {{-- <div class="select-package">
                                    <div class="no-padding col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <h3 class="margin-bottom-20">Selecciona un paquete</h3>
                                        @foreach ($paquetes as $paquete)
                                        <div class="pricing-list">
                                            <div class="row">
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>Paquete de reactivación <small>Posicionamiento en el top cada {{$paquete->periodo_horas}} horas</small></h3>
                                                    <p>Recuerda, por cada reactivación se te disminuirá 1 crédito.</p>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="pricing-list-price text-center">
                                                   
                                                        <a href="#submit"
                                                            class="btn btn-theme btn-sm btn-block">Seleccionar</a>
                                                    </div>
                                                    <input type="number" value="{{$paquete->id}}" style="display: none;" >
                                                </div>
                            
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        @endforeach
                                        
                                     
                                    </div>
                                </div> --}}
                                <div class="row">
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">Paquete <small>Costo por activación de paquete (1 crédito)</small></label>
                                    <select class="category form-control" name="paquete_id">
                                        <option label="Select Option"></option>
                                        @foreach ($paquetes as $paquete)
                                        <option value="{{$paquete->id}}">Reactivación cada {{$paquete->periodo_horas}} horas</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>

                                <!-- Featured Ad  -->
                                {{-- <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <label class="control-label">Make Your Ad Featured <small
                                                class="pull-right"> <a href="">What is featured
                                                    ad</a></small></label>
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="radio" id="bank" name="minimal-radio">
                                                    <label for="bank"> Direct Bank Transfer</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="cheque" name="minimal-radio" checked>
                                                    <label for="cheque">Cheque Payment</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="paypal" name="minimal-radio" checked>
                                                    <label for="paypal">Paypal</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="card" name="minimal-radio" checked>
                                                    <label for="card">Credit Card</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- end row -->
                                <button class="btn btn-theme pull-right">Publicar anuncio</button>
                            </form>
                        </div>
                        <!-- end post-ad-form-->
                    </div>
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
            <i class="flaticon-photo"></i>
        </span>
        <h4>Publicar</h4>
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

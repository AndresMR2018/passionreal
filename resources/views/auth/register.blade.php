@extends('layouts.main')

@section('content')
 <!-- Main Container -->
 <div class="container">
    <!-- Row -->
    <div class="row">
       <!-- Middle Content Area -->
       <div class="col-md-6 col-md-push-3 col-sm-6 col-xs-12">
        
          <!--  Form -->
          <div class="form-grid">
            <div class="heading-panel">
                <h3 class="main-title text-left">
                  Registra tu cuenta
                </h3>
             </div>
             <form>
                <div class="form-group">
                    <label>Nombre</label>
                    <input placeholder="Ingresa tu nombre" class="form-control" type="text">
                 </div>
                <div class="form-group">
                   <label>Correo electrónico</label>
                   <input placeholder="Ingresa tu correo electrónico" class="form-control" type="email">
                </div>
                <div class="form-group">
                   <label>Contraseña</label>
                   <input placeholder="Ingresa tu contraseña" class="form-control" type="password">
                </div>
                <div class="form-group">
                    <label>Confirmar contraseña</label>
                    <input placeholder="Vuelve a ingresar tu contraseña" class="form-control" type="password">
                 </div>
                <div class="form-group">
                    <div class="row">
                       <div class="col-xs-12 col-sm-7">
                          <div class="skin-minimal">
                             <ul class="list">
                                <li>
                                   <input  type="checkbox" id="minimal-checkbox-1" value="1" name="minimal-checkbox-1">
                                   <label for="minimal-checkbox-1">Verificar cuenta</label>
                                </li>
                             </ul>
                          </div>
                       </div>
                      
                    </div>
                 </div>
                 @if (Request::get('minimal-checkbox-1'))
                 {
                    <div class="form-group">
                        <label>Fotos</label>
                        <input class="form-control" type="file" multiple>
                     </div>
                     <div class="form-group">
                        <label>Número de contacto</label>
                        <input placeholder="Ingresa tu número de contacto" class="form-control" type="text">
                     </div>
                 }
                 @endif
                 
                <button class="btn btn-theme btn-lg btn-block">Registrarse</button>
                <p></p>
                <div class="row">
                <div class="col-xs-12 center-block text-center">
                    <p class="help-block"><a data-target="#myModal" data-toggle="modal">¿Ya tienes una cuenta?</a>
                    </p>
                </div>
                 </div>
             </form>
          </div>
          <!-- Form -->
       </div>

       <!-- Middle Content Area  End -->
    </div>
    <!-- Row End -->
 </div>
 <!-- Main Container End -->
@endsection


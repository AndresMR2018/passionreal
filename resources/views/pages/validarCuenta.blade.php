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
                 Validar cuenta  
                </h3>
             </div>
             <form method="POST" action="{{route('home.validacionCuenta')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                   <label>Código</label>
                   <input id="codigo" placeholder="Ingrese el código que llegará a tu celular" class="form-control @error('codigo') is-invalid @enderror" type="codigo" name="codigo_enviado" value="{{ old('codigo_enviado') }}" required >
                   @error('codigo_enviado')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
                </div>
                <div class="form-group">
                   <label>Foto</label>
                   <input id="foto" class="form-control @error('foto') is-invalid @enderror" type="file" name="foto"  autocomplete="current-foto">
                   @error('foto')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
                </div>
                <button class="btn btn-theme btn-lg btn-block" type="submit">Enviar código</button>
                <p></p>
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
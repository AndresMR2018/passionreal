@extends('adminlte::page')

@section('content')
<div class="contenedor">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" role="alert">
<span aria-button="true">&times;</span>
</button>
</div>
@endif


<div class="info col-4" style="padding-top:50px;">
    <div class="card" style="width: 42rem;">
        <img src="{{$cliente->perfil->foto}}" class="card-img-top" alt="...">
        <div class="card-body" style="text-align:center;">
          <h5 class="card-title" style="text-align:center">{{$cliente->name}}</h5>
          <p class="card-text">{{$cliente->perfil->dni}}</p>
          <p class="card-text">{{$cliente->email}}</p>
          <p class="card-text">{{$cliente->perfil->telefono}}</p>
          <p class="card-text">{{$cliente->perfil->direccion}}</p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
      </div>
</div>

</div>


@endsection




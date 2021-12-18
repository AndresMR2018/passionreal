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


<div  style="padding-top:50px;" style="display:flex; justify-content:center;">
    <div class="card" style="width: 42rem; display:flex; justify-content:center;">
      <div style="display:flex;
      justify-content: center;
      align-items: center;">
        <img style="max-width:300px;" src="{{asset('storage/'.$cliente->perfil->foto)}}" class="card-img-top" alt="...">
       
      </div>
       <div class="card-body" style="text-align:center;">
          <h5 class="card-text">{{$cliente->name}}</h5>
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




@extends('adminlte::page')
{{-- <link rel="stylesheet" href="{!! asset('css/producto/productosInventario.css') !!}"> --}}
@section('content')
<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" role="alert">
<span aria-button="true">&times;</span>
</button>
</div>
@endif

<table class="table table-light">
<thead class="thead-light">
<tr>
<th>#</th>
<th>Usuario</th>
<th>Cuenta verificada</th>
<th>Código recibido</th>
<th>Código enviado por el usuario</th>
<th>Foto</th>
<th>Acciones</th>
</tr>
</thead>

    <tbody>
    @foreach($solicitudes as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->user->name}}</td>
            <td>{{$s->user->cta_validada}}</td>
            <td>{{$s->codigo_generado}}</td>
            <td>{{$s->codigo_enviado}}</td>
            <td>
                <img class="img-thumbnail img-fluid" width="100px" src="{{$s->foto}}" alt=" ">
                </td>
            
            <td>
              
                   <a class="btn btn-success" href="{{url('/admin/aprobar-cuenta/'.$s->user->id)}}">Cambiar estado</a>
      
           
            <form method="post" action="{{url('admin/solicitud/'.$s->id)}}" class="d-inline">
            @csrf
            {{method_field('DELETE')}}
                <input type="submit" value="Borrar" id="botoncol" class="btn btn-danger" onclick="return confirm('Desea borrar?')">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- {!!$solicitudes->links() !!} --}}
</div>
@endsection

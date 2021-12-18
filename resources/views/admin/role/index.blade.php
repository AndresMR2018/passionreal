@extends('adminlte::page')
{{-- <link rel="stylesheet" href="{!! asset('css/producto/productosInventario.css') !!}"> --}}
@section('content')
<div class="container">

{{-- @if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" role="alert">
<span aria-button="true">&times;</span>
</button>
</div>
@endif --}}


      {{-- <div class="menu__datos">
<div class="botones">
<a href="{{url('marca/create')}}" class="btn btn-success mb-2">Registrar nueva marca</a>
<!-- Se manda a llamar al metodo create que trae la vista del formulario -->
</div>

</div> --}}


<table class="table table-light">
<thead class="thead-light">
<tr>
<th>#</th>
<th>Rol</th>
<th>Acciones</th>
</tr>
</thead>

    <tbody>
    @foreach($roles as $rol)
        <tr>
            <td>{{$rol->id}}</td>
            <td>{{$rol->name}}</td>
          
            
            <td>
            <a href="" id="botoncol" class="btn btn-warning mb-2 ">Editar</a>

            <form method="post" action="" class="d-inline">
            @csrf
            {{method_field('DELETE')}}
                <input type="submit" value="Borrar" id="botoncol" class="btn btn-danger" onclick="return confirm('Desea borrar?')">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
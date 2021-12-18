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


      <div class="menu__datos">
<div class="botones">
<a href="{{url('admin/categoria/create')}}" class="btn btn-success mb-2">Registrar nueva categoría</a>
<!-- Se manda a llamar al metodo create que trae la vista del formulario -->
</div>

</div>


<table class="table table-light">
<thead class="thead-light">
<tr>
<th>#</th>
<th>Nombre de la categoría</th>
<th>Foto</th>
<th>Acciones</th>
</tr>
</thead>

    <tbody>
    @foreach($categorias as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nombre}}</td>
            <td>
                <img class="img-thumbnail img-fluid" width="100px" src="{{$c->foto}}" alt="foto de categoria ">
                </td>
            
            <td>
            <a href="{{url('admin/categoria/'.$c->id.'/edit')}}" id="botoncol" class="btn btn-warning mb-2 ">Editar</a>

            <form method="post" action="{{url('admin/categoria/'.$c->id)}}" class="d-inline">
            @csrf
            {{method_field('DELETE')}}
                <input type="submit" value="Borrar" id="botoncol" class="btn btn-danger" onclick="return confirm('Desea borrar?')">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$categorias->links() !!}
</div>
@endsection

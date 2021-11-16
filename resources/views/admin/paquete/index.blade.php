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
<a href="{{url('admin/paquete/create')}}" class="btn btn-success mb-2">Registrar nuevo paquete</a>
<!-- Se manda a llamar al metodo create que trae la vista del formulario -->
</div>

</div>


<table class="table table-light">
<thead class="thead-light">
<tr>
<th>#</th>
<th>Lapso de activación</th>
<th>Acciones</th>
</tr>
</thead>

    <tbody>
    @foreach($paquetes as $paquete)
        <tr>
            <td>{{$paquete->id}}</td>
            <td>{{$paquete->periodo_horas}}</td>
            <td>
            <a href="{{url('admin/paquete/'.$paquete->id.'/edit')}}" id="botoncol" class="btn btn-warning mb-2 "><i class="fas fa-edit"></i></a>

            <form method="post" action="{{url('admin/paquete/'.$paquete->id)}}" class="d-inline">
            @csrf
            {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger" onclick="return confirm('Desea borrar?')"><i class="fas fa-trash-alt"></i></button>
              
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$paquetes->links() !!}
</div>
@endsection

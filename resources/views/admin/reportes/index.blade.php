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
<th>Reporte #</th>
<th>Motivo</th>
<th>Comentario</th>
<th>Autor de anuncio</th>
<th>Acciones</th>
</tr>
</thead>

    <tbody>
    @foreach($reportes as $reporte)
        <tr>
            <td>{{$reporte->id}}</td>
            <td>{{$reporte->motivo}}</td>
            <td>{{$reporte->comentario}}</td>
            <td><a href="{{route('admin.usuarioReportado',$reporte->user->id)}}">{{$reporte->user->name}}</a></td>
            <td>
            <a href="{{route('reportar',$reporte->user->id)}}" id="botoncol" class="btn btn-warning mb-2 "><i class="fas fa-edit">Banear</i></a>
        <br/>
        <a href="" class="btn btn-success mb-2"><i class=" fas fa-edit">Limpiar</i></a>    
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$reportes->links() !!}
</div>
@endsection

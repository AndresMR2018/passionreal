@extends('adminlte::page')
@section('content')
<div class="container">
<form method="post" enctype="multipart/form-data" action="{{url('admin/paquete/'.$paquete->id)}}">
    @csrf
    {{method_field('PATCH')}}

@include('admin.paquete.form',['modo'=>'Editar'])
</form>
</div>
@endsection
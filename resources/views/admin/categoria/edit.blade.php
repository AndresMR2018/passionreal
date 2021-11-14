@extends('adminlte::page')
@section('content')
<div class="container">
<form method="post" enctype="multipart/form-data" action="{{url('/categoria/'.$categoria->id)}}">
    @csrf
    {{method_field('PATCH')}}

@include('admin.categoria.form',['modo'=>'Editar'])
</form>
</div>
@endsection
@extends('adminlte::page')
@section('content')
<div class="container">
<form method="post" action="{{url('/admin/paquete')}}" enctype="multipart/form-data">
<!-- //ESTO ME APUNTA A CATEGORIA.STORE -->
@csrf
@include('admin.paquete.form',['modo'=>'Crear'])
</form>
</div>
@endsection
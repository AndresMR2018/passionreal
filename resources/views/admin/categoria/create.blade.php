@extends('adminlte::page')
@section('content')
<div class="container">
<form method="post" action="{{url('admin/categoria')}}" enctype="multipart/form-data">
<!-- //ESTO ME APUNTA A CATEGORIA.STORE -->
@csrf
@include('admin.categoria.form',['modo'=>'Crear'])
</form>
</div>
@endsection
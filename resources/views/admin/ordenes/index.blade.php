@extends('adminlte::page')

@section('content')
    <div class="container">

        @if (Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" role="alert">
                    <span aria-button="true">&times;</span>
                </button>
            </div>
        @endif

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Fecha de orden</th>
                    <th>Subtotal</th>
                    <th>ID de usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ordenes as $orden)
                    <tr>
                        <td>{{ $orden->id }}</td>
                        <td>{{ $orden->fecha_orden }}</td>
                        <td>{{ $orden->subtotal }}</td>
                        <td>{{ $orden->user_id }}</td>
                        <td>
                            <a href="{{url('/datos-cliente/' . $orden->user_id)}}" title="Ver más"><li class="fa fa-eye"></li></a>
                            
                        </td>
                        {{-- <td>
                            <a href="{{ url('admin/orden/' . $orden->id . '/edit') }}" id="botoncol"
                                class="btn btn-warning mb-2 "><i class="fas fa-edit"></i></a>

                            <form method="post" action="{{ url('admin/orden/' . $orden->id) }}" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Desea borrar?')"><i
                                        class="fas fa-trash-alt"></i></button>

                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $ordenes->links() !!}
    </div>
@endsection

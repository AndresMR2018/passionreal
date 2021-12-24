<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <style>
        body{
            background-color: #AEB6BF;
        }
        .page-break {
            page-break-after: always;
        }
        .container{
            display:flex;
            text-align:center;
        }
        .titulo{
            padding-top:20px;
        }
        .contenido{
            padding-top:100px;
        }
        </style>

        <div class="container">
            <div class="titulo"><h4>Orden de compra</h4></div>
            <div class="contenido">
              
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th># Orden</th>
                            <th>Fecha</th>
                            <th>Teléfono</th>
                            <th>DNI</th>
                            <th>Subtotal</th>
                            
                            <th>ID de usuario</th>
                        
                        </tr>
                    </thead>
        
                    <tbody>
                            <tr>
                                <td>{{ $orden->id }}</td>
                                <td>{{date('d-m-Y', strtotime($orden->fecha_orden)) }}</td>
                                <td>{{$orden->telefono}}</td>
                                <td>{{$orden->dni}}</td>
                                <td>{{ $orden->subtotal }}</td>
                                <td>{{ $orden->user_id }}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="page-break"></div>
        <h1>Page 2</h1> --}}
</body>
</html>
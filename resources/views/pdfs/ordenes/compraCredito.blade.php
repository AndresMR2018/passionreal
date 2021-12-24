<!DOCTYPE html>
<html>
<head>
    <title>Comprobante de compra</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <style>
        body{
            background-color: white;
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
            padding-top:150px;
        }
        .img{
            max-width: 200px;
        }
        </style>

        <div class="container">
            <img class="img" src="{{public_path('/images/logo/logoPassionReal.jpeg')}}">
            <div class="titulo"><a>ORDEN DE COMPRA</a></div>
            <div class="contenido">
              
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th># Orden</th>
                            <th>Fecha</th>
                            <th>DNI</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
        
                    <tbody>
                            <tr>
                                <td>{{ $orden->id }}</td>
                                <td>{{date('d-m-Y', strtotime($orden->fecha_orden)) }}</td>
                            
                                <td>{{$orden->dni}}</td>
                                <td>{{ $orden->subtotal }}</td>
                              
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="page-break"></div>
        <h1>Page 2</h1> --}}
</body>
</html>
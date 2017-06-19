<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sessions</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="page-header">
  <h1>Sesiones <small>REGISTRO</small></h1>
</div>

            <div class="content">
                <table class="table table-striped">
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha</th>
                    </tr>
                    @foreach ($sesiones as $sesion)
                    <tr>
                        <td>{{ $sesion->nombre }}</td>
                        <td>{{ $sesion->email }}</td>
                        <td>{{ $sesion->fecha }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>

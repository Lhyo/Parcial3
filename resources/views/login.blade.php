<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
    

        <div class="container">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
            <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="panel-body">
                
                {!! Form::open(['url' => '/login', 'method'=>'POST']) !!}

                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email',null, ['class' => 'form-control' , 'required' , 'placeholder'=>'correo@gmail.com']) !!}
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    {!! Form::label('password','Contraseña') !!}
                    {!! Form::password('password',['class' => 'form-control' , 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Aceptar',['class' => 'btn btn-info']) !!}
                </div>

            </div>

            </div>
            </div>
        </div>

    {!! Form::close() !!}
    </body>
</html>
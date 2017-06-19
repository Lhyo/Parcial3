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
            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
            <div class="panel-body">
                
                <?php echo Form::open(['url' => '/login', 'method'=>'POST']); ?>


                <div class="form-group">
                    <?php echo Form::label('email','Email'); ?>

                    <?php echo Form::email('email',null, ['class' => 'form-control' , 'required' , 'placeholder'=>'correo@gmail.com']); ?>

                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('password','Contraseña'); ?>

                    <?php echo Form::password('password',['class' => 'form-control' , 'required']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::submit('Aceptar',['class' => 'btn btn-info']); ?>

                </div>

            </div>

            </div>
            </div>
        </div>

    <?php echo Form::close(); ?>

    </body>
</html>
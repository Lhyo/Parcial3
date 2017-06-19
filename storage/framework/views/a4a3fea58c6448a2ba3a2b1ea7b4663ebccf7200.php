<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
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
                    <?php $__currentLoopData = $sesiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sesion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($sesion->nombre); ?></td>
                        <td><?php echo e($sesion->email); ?></td>
                        <td><?php echo e($sesion->fecha); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </body>
</html>

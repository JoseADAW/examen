<?php $__env->startSection('title', "Usuario #{$user->id}"); ?>

<?php $__env->startSection('content'); ?>
    <h1>Usuario #<?php echo e($user->id); ?></h1>

    <p>Mostrando los detalles del usuario <?php echo e($user->name); ?></p>
    <p>Correo electrónico: <?php echo e($user->email); ?></p>
    <p>
        <a href="<?php echo e(route('users')); ?>">Regresar al listado de usuarios</a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proyecto16/resources/views/users/show.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Editar usuario'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('shared._card'); ?>
        <?php $__env->slot('header', 'Editar usuario'); ?>

        <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="<?php echo e(route('user.update', $user)); ?>" method="post">
            <?php echo e(method_field('PUT')); ?>


            <?php echo $__env->make('users._fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Actualizar usuario</button>
                <a href="<?php echo e(route('users')); ?>" class="btn btn-link">Regresar al listado de usuarios</a>
            </div>
        </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proyecto16/resources/views/users/edit.blade.php ENDPATH**/ ?>
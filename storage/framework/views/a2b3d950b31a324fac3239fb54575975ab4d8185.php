<?php $__env->startSection('title', trans("users.title.{$view}")); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">Usuarios</h1>
        <p>
            <?php if($view === 'index'): ?>
                <a href="<?php echo e(route('users.trashed')); ?>" class="btn btn-success">Ver Papelera</a>
                <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary">Nuevo usuario</a>
            <?php else: ?>
                <a href="<?php echo e(route('users')); ?>" class="btn btn-primary">Usuarios</a>
            <?php endif; ?>
        </p>
    </div>

    <?php echo $__env->renderWhen($view === 'index','users._filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

    <?php if($users->isNotEmpty()): ?>
        <div class="table-responsive-lg table-striped">
            <table class="table table-sm">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"># <span class="oi oi-caret-bottom"></span><span class="oi oi-caret-top"></span></th>
                    <th scope="col"><a href="<?php echo e($sortable->url('first_name')); ?>" class="<?php echo e($sortable->classes('first_name')); ?>">Nombre</a></th>
                    <th scope="col"><a href="<?php echo e($sortable->url('email')); ?>" class="<?php echo e($sortable->classes('email')); ?>">Correo</a></th>
                    <th scope="col"><a href="<?php echo e($sortable->url('date')); ?>" class="<?php echo e($sortable->classes('date')); ?>">Registrado el</a></th>
                    <th scope="col"><a href="<?php echo e($sortable->url('login')); ?>" class="<?php echo e($sortable->classes('login')); ?>">Último login</a></th>
                    <th scope="col" class="text-right th-actions">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php echo $__env->renderEach('users._row', $users, 'user'); ?>
                </tbody>
            </table>
        <?php echo e($users->links()); ?>

    <?php else: ?>
        <p>No hay usuarios registrados</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proyecto16/resources/views/users/index.blade.php ENDPATH**/ ?>
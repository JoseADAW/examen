<?php $__env->startSection('title', 'Profesiones'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">Listado de Profesiones</h1>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Perfiles</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($profession->id); ?></th>
                <td><?php echo e($profession->title); ?></td>
                <td><?php echo e($profession->profiles_count); ?></td>
                <td>
                    <?php if($profession->profiles_count == 0): ?>
                        <form action="<?php echo e(route('profession.destroy', $profession->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-link"><span class="oi oi-trash" /></button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proyecto16/resources/views/professions/index.blade.php ENDPATH**/ ?>
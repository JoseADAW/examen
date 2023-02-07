<?php $__env->startSection('title', 'Editar perfil de usuario'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('shared._card'); ?>
        <?php $__env->slot('header', 'Editar perfil'); ?>

        <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form method="post" action="<?php echo e(url('editar-perfil')); ?>">
        <?php echo e(method_field('PUT')); ?>

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="first_name">Nombre:</label>
            <input type="text" name="first_name" class="form-control" placeholder="Nombre"
                   value="<?php echo e(old('first_name', $user->first_name)); ?>">
        </div>

        <div class="form-group">
            <label for="last_name">Apellidos:</label>
            <input type="text" name="last_name" class="form-control" placeholder="Nombre"
                   value="<?php echo e(old('last_name', $user->last_name)); ?>">
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" class="form-control"
                   placeholder="Correo electrónico" value="<?php echo e(old('email', $user->email)); ?>">
        </div>

        <div class="form-group">
            <label for="bio">Biografía:</label>
            <textarea name="bio" id="bio" class="form-control"><?php echo e(old('bio', $user->profile->bio)); ?></textarea>
        </div>

        <div class="form-group">
            <label for="twitter">Twitter:</label>
            <input type="text" class="form-control" name="twitter" id="twitter"
                   value="<?php echo e(old('twitter', $user->profile->twitter)); ?>" placeholder="URL de tu usuario de twitter">
        </div>

        <div class="form-group">
            <label for="profession_id">Profesión:</label>
            <select name="profession_id" id="profession_id" class="form-control">
                <option value="">Selecciona una opción...</option>
                <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($profession->id); ?>" <?php echo e(old('profession_id', $user->profile->profession_id) == $profession->id ? ' selected' : ''); ?>><?php echo e($profession->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Actualizar perfil</button>
            <a href="<?php echo e(route('users')); ?>" class="btn btn-link">Regresar al listado de usuarios</a>
        </div>
    </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proyecto16/resources/views/profiles/edit.blade.php ENDPATH**/ ?>
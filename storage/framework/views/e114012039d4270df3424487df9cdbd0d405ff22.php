<?php echo e(csrf_field()); ?>


<div class="form-group">
    <label for="first_name">Nombre:</label>
    <input type="text" name="first_name" class="form-control" placeholder="Nombre"
           value="<?php echo e(old('first_name', $user->first_name)); ?>">
</div>

<div class="form-group">
    <label for="last_name">Apellidos:</label>
    <input type="text" name="last_name" class="form-control" placeholder="Apellidos"
           value="<?php echo e(old('last_name', $user->last_name)); ?>">
</div>

<div class="form-group">
    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" class="form-control"
           placeholder="Correo electrónico" value="<?php echo e(old('email', $user->email)); ?>">
</div>

<div class="form-group">
    <label for="password">Contraseña:</label>
    <input type="password" name="password" class="form-control"
           placeholder="Escribe tu contraseña">
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

<h5>Habilidades</h5>

<?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="form-check form-check-inline">
        <input name="skills[]" class="form-check-input" type="checkbox"
               id="skill_<?php echo e($skill->id); ?>" value="<?php echo e($skill->id); ?>"
                <?php echo e(($errors->any() ? old('skills.' . $skill->id) : $user->skills->contains($skill)) ? ' checked' : ''); ?>

        >
        <label class="form-check-label" for="skill_<?php echo e($skill->id); ?>"><?php echo e($skill->name); ?></label>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<h5 class="mt-3">Rol</h5>

<?php $__currentLoopData = trans('users.roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role"
               id="role_<?php echo e($role); ?>" value="<?php echo e($role); ?>"
                <?php echo e(old('role', $user->role) === $role ? ' checked' : ''); ?>

        >
        <label class="form-check-label" for="<?php echo e($role); ?>"><?php echo e($name); ?></label>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<h5 class="mt-3">Estado</h5>

<?php $__currentLoopData = trans('users.states'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio"
               name="state"
               id="state_<?php echo e($state); ?>" value="<?php echo e($state); ?>"
                <?php echo e(old('state', $user->state) === $state ? ' checked' : ''); ?>

        >
        <label class="form-check-label" for="<?php echo e($state); ?>"><?php echo e($label); ?></label>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/proyecto16/resources/views/users/_fields.blade.php ENDPATH**/ ?>
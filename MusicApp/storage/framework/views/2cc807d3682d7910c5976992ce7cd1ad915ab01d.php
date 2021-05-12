<?php if(auth()->guard()->guest()): ?>
    <?php else: ?>
        <?php if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador"): ?>
            

<?php $__env->startSection('title'); ?>
   Usuarios
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-center py-5">Usuarios</h1>
    
    <table class="table ">
    <thead class="py-2">
        <tr>
          
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td scope="row"><?php echo e($item->name); ?></td>
            <td><?php echo e($item->email); ?></td>
            <td><?php echo e($item->rol); ?></td>
            <?php if(auth()->guard()->guest()): ?>
                <?php else: ?>
                    <?php if(Auth::user()->rol == "super"): ?>
            <td>
                <div class="d-flex justify-content-end mb-2">
                    <a href="/users/<?php echo e($item->id); ?>/edit" class="btn btn-info">
                        Editar Rol
                    </a>
                </div>
                
            </td>
            <td>
                <form action="/users/<?php echo e($item->id); ?>" method="POST">
                    <?php echo csrf_field(); ?> 
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger" type="submit">
                    Eliminar
                    </button>
                </form>
            </td>
            <?php endif; ?>
         <?php endif; ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

    <?php endif; ?>
        <?php endif; ?>
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/users/index.blade.php ENDPATH**/ ?>
<?php if(auth()->guard()->guest()): ?>
    <?php else: ?>
       <?php if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador"): ?>
                            
                        


<?php $__env->startSection('title'); ?>
    Panel 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="">
    <h3 class="py-8 text-center">Panel</h3>
    <div class="d-flex flex-column flex-md-row flex-md-wrap justify-content-center py-5">
        <a class="btn btn-outline-dark m-2" style="font-size: 8em" href="/users">
            <h5 class="text-center">Usuarios</h5>
            <img src="<?php echo e(asset('img/usuarios.png')); ?>" alt="Logo" class="img-fluid" width="125" >
        </a>
        <a class="btn btn-outline-dark m-2" style="font-size: 8em" href="/generos">
            <h5 class="text-center">Generos</h5>
            <img src="<?php echo e(asset('img/generos.png')); ?>" alt="Logo" class="img-fluid" width="125" >
        </a>
        
        
    
    </div>
</div>

<?php $__env->stopSection(); ?>

    <?php endif; ?>
        <?php endif; ?>
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/users/admin.blade.php ENDPATH**/ ?>
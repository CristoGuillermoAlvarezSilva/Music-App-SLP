<?php if(auth()->guard()->guest()): ?>

    <?php else: ?>
       <?php if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador"): ?>
                            
                        


<?php $__env->startSection('title'); ?>
    Panel 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1 class="card-body titulo-pags">Panel de SuperUsuario</h1>
<div class="categoria-items row py-5">

    <div class="card panel">
        <a class="" style="font-size: 8em" href="/users">
           <div class="card-body">
           <div class="titulo-gens"></div>
                <h5 class="text-center">Usuarios</h5>
                <img src="<?php echo e(asset('img/usuarios.png')); ?>" alt="Logo" class="img-fluid" width="125" >
           
           </div>
           </a>
            
        </div>
        <div class="card panel">
            <a class="" style="font-size: 8em" href="/generos">
                <h5 class="text-center">Generos</h5>
                <img src="<?php echo e(asset('img/generos.png')); ?>" alt="Logo" class="img-fluid" width="125" >
            </a>
        </div>

        
</div>

<?php $__env->stopSection(); ?>

    <?php endif; ?>
        <?php endif; ?>
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Documentos\GitHub\Music-App-SLP\MusicApp\resources\views/users/admin.blade.php ENDPATH**/ ?>
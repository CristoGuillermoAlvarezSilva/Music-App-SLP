
<?php $__env->startSection('title'); ?>
    Generos musicales
<?php $__env->stopSection(); ?>


<!--Contenido de la pagina-->
<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Generos</h1>
    <?php if(auth()->guard()->guest()): ?>
    <?php else: ?>
        <?php if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador"): ?>
        <!--Administrador-->
    <div class="d-flex justify-content-end mb-2">
        <a href="/generos/create" class="btn btn-primary">
            Agregar genero musical
        <i class="fas fa-plus"></i>
        </a>
    </div>
    
    <?php endif; ?>
        <?php endif; ?>

    <!--Todos usuarios-->
   <div class="categoria-items row py-5">

                <?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                    <div class="categoria-item col-12 col-md-3 pt-1">
                        <div class="car">
                            <div class="fon">
                                <img src="/<?php echo e($item->path); ?>" alt="" width="300px" height="250px">
                                <div class="card-body">
                                    <div class="card-title">
                                        <ul class="tipo justify-content-centerr"><?php echo e($item->genero); ?></ul>
                                        <!--link para ir al genero especificado-->
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a href="/representantes/byName/<?php echo e($item->genero); ?>" class="btn btn-info">
                                        Ver
                                    </a>
                                </div>
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php else: ?>
                                        <?php if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador"): ?>
                                            <div class="d-flex">
                                                <a href="/generos/<?php echo e($item->id); ?>/edit" class="btn btn-info">
                                                    Editar
                                                </a>
                                            </div>
                                            <form action="/generos/<?php echo e($item->id); ?>" method="POST">
                                                <?php echo csrf_field(); ?> 
                                                <?php echo method_field('DELETE'); ?>
                                                <button class="btn btn-danger" type="submit">
                                                Eliminar
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </div>
<?php $__env->stopSection(); ?>




 
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/generos/index.blade.php ENDPATH**/ ?>
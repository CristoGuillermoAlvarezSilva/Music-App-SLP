
<?php $__env->startSection('title'); ?>
    Generos musicales
<?php $__env->stopSection(); ?>


<!--Contenido de la pagina-->
<?php $__env->startSection('content'); ?>
<h1 class="card-body titulo-pags">Géneros</h1>
    <?php if(auth()->guard()->guest()): ?>
    <?php else: ?>
        <?php if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador"): ?>
        <!--Administrador-->
    <div>
        <a href="/generos/create" class="">
            Agregar género
        </a>
    </div>
    
    <?php endif; ?>
        <?php endif; ?>

    <!--Todos usuarios-->
   <div class="categoria-items row py-5">
        
                <?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                <div class="categoria-item col-12 col-md-6 col-xl-3 pt-1 card generos">
                    <div class="card-body">
                        <a href="/representantes/byName/<?php echo e($item->genero); ?>">
                        <div class="img-gens" style="background-image: url(<?php echo e($item->path); ?>);">
                            <div class="caja-gens"></div>
                            <div class="titulo-gens">
                                <span ><?php echo e($item->genero); ?></span>
                                <!--link para ir al genero especificado-->
                            </div>
                        </div>
                        </a>       
                    </div>  

                    <?php if(auth()->guard()->guest()): ?>
                                <?php else: ?>
                                    <?php if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador"): ?>
                                    <div class="d-flex flex-row">  
                                        <div>
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
                                    </div>
                                <?php endif; ?>
                        <?php endif; ?>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>




 
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Documentos\GitHub\Music-App-SLP\MusicApp\resources\views/generos/index.blade.php ENDPATH**/ ?>
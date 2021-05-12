
<?php $__env->startSection('title'); ?>
    Artistas
<?php $__env->stopSection(); ?>


<!--Contenido de la pagina-->
<?php $__env->startSection('content'); ?>
<h1 class="card-body titulo-pags">Artistas</h1>

    <!--Todos los artistas-->
   <div class="categoria-items row py-5">

                <?php $__currentLoopData = $representantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                            <?php if($item->genero == $genero): ?>
                                <div class="categoria-item col-12 col-md-6 col-xl-3 pt-1 card artistas">
                                    <div class="card-body">
                                        <a href="/representantes/<?php echo e($item->id); ?>/edit">
                                            <div class="img-gens">
                                                <img src="/<?php echo e($item->path); ?>" class="img-gens">
                                                <div class="caja-gens">
                                                    <div class="titulo-gens">
                                                        <span class="tipo justify-content-centerr"><?php echo e($item->nombre); ?></span>
                                                        <!--link para ir al genero especificado-->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        
                                    </div>
                                </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Documentos\GitHub\Music-App-SLP\MusicApp\resources\views/representantes/index.blade.php ENDPATH**/ ?>
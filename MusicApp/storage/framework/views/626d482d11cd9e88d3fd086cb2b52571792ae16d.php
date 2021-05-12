
<?php $__env->startSection('title'); ?>
    Artistas
<?php $__env->stopSection(); ?>


<!--Contenido de la pagina-->
<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Artistas</h1>


    <!--Todos los artistas-->
   <div class="categoria-items row py-5">

                <?php $__currentLoopData = $representantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                            <?php if($item->genero == $genero): ?>
                                <div class="categoria-item col-12 col-md-3 pt-1">
                                    <div class="car">
                                        <div class="fon">
                                            <img src="/<?php echo e($item->path); ?>" alt="" width="300px" height="250px">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <ul class="tipo justify-content-centerr"><?php echo e($item->nombre); ?></ul>
                                                    <!--link para ir al genero especificado-->
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex">
                                                <a href="/representantes/<?php echo e($item->id); ?>/edit" class="btn btn-info">
                                                  Ver
                                                </a>
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/representantes/index.blade.php ENDPATH**/ ?>
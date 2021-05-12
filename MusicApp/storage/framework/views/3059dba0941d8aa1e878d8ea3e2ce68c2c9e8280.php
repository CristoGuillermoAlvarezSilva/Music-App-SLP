
<?php $__env->startSection('title'); ?>
    Novedades
<?php $__env->stopSection(); ?>


<!--Contenido de la pagina-->
<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Blog</h1>
    <?php if(auth()->guard()->guest()): ?>

    <?php else: ?>
        <a class="btn btn-dark" type="button" href="/novedades/create">
            Agregar alguna novedad
        </a>
    <?php endif; ?>


    <!--Todos usuarios-->
   <div class="categoria-items row py-5">

                <?php $__currentLoopData = $novedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                    <div class="categoria-item col-12 col-md-3 pt-1">
                        <div class="car">
                            <div class="fon">
                                <div class="card-body">
                                    <div class="card-title">
                                        <ul class="tipo justify-content-center">Titulo:<?php echo e($item->titulo); ?></ul>
                                        <ul class="tipo justify-content-center">Descripcion: <?php echo e($item->descripcion); ?></ul>
                                        <?php
                                            $video_id = $item->video;
                                        ?>
   
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        
                                        <ul class="tipo justify-content-center">Fecha: <?php echo e($item->fecha); ?></ul>
                                        
                                    </div>
                                </div>
                               
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php else: ?>
                                        <?php if(Auth::user()->id == $item->idR): ?>
                                            <div class="d-flex">
                                                <a href="/novedades/<?php echo e($item->id); ?>/edit" class="btn btn-info">
                                                    Editar
                                                </a>
                                            </div>
                                            <form action="/novedades/<?php echo e($item->id); ?>" method="POST">
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




 
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/novedades/index.blade.php ENDPATH**/ ?>
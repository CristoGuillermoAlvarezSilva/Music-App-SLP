
<?php $__env->startSection('title'); ?>
    Novedades
<?php $__env->stopSection(); ?>


<!--Contenido de la pagina-->
<?php $__env->startSection('content'); ?>
<h1 class="card-body titulo-pags">Blog</h1>
    <?php if(auth()->guard()->guest()): ?>

    <?php else: ?>
        <a class="" href="/novedades/create">
            Agregar noticia
        </a>
    <?php endif; ?>


    <!--Todos usuarios-->
    <div class="categoria-items row py-5">
        
                <?php $__currentLoopData = $novedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                    <div class="categoria-item col-12 col-xs-12 col-sm-12 col-md-12 pt-1 card novedad">
                        <div class="card-body ">
                            <div>
                                    <?php $__currentLoopData = $representantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(auth()->guard()->guest()): ?>
                                                <?php else: ?>
                                                <?php if($item->idR == $item2->idU): ?>


                                                    <h3 class="tipo justify-content-center"><?php echo e($item2->nombre); ?></h3>  

                                                <?php endif; ?>
                                            <?php endif; ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                <h5 class="card-title fondonegro "><?php echo e($item->titulo); ?></h5>
                                <ul class="card-text fondonegro"><?php echo e($item->descripcion); ?></ul>
                                <?php
                                    $video_id = $item->video;
                                ?>  
                            </div>
                            <div class="card-img-bot"> 
                                <iframe src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="10" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <ul class="card-text fondonegro"> Publicado el<b>  <?php echo e($item->fecha); ?></b></ul>
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                            <?php if(auth()->guard()->guest()): ?>
                                    <?php else: ?>
                                        <?php if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador"): ?>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <form action="/novedades/<?php echo e($item->id); ?>/edit">
                                                    <button class="boton-edit" type="submit">
                                                    Editar
                                                    </button>
                                                </form>
                                            </div>
                                            <div>
                                            <form action="/novedades/<?php echo e($item->id); ?>" method="POST">
                                                <?php echo csrf_field(); ?> 
                                                <?php echo method_field('DELETE'); ?>
                                                <button class="boton-elim" type="submit">
                                                    Eliminar
                                                </button>
                                            </form>
                                            <br>
                                            </div>
                                        </div>   
                                        <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </div>
<?php $__env->stopSection(); ?>




 
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Documentos\GitHub\Music-App-SLP\MusicApp\resources\views/novedades/index.blade.php ENDPATH**/ ?>
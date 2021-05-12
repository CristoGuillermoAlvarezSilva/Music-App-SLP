
<?php $__env->startSection('title'); ?>
    Eventos
<?php $__env->stopSection(); ?>


<!--Contenido de la pagina-->
<?php $__env->startSection('content'); ?>
<h1 class="card-body titulo-pags">Eventos</h1>
    <?php if(auth()->guard()->guest()): ?>
    
    <?php else: ?>
        <a class="" href="/eventos/create">
            Agregar evento
        </a>
    <?php endif; ?>


    <!--Todos usuarios-->
   <div class="categoria-item row py-5">
        
                <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                <div class="categoria-item col-12 col-md-6 col-xl-3 pt-5 card eventos">
                        <div class="card-body">
                            <div >

                                <?php $__currentLoopData = $representantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(auth()->guard()->guest()): ?>
                                        <?php else: ?>
                                            <?php if($item->idR == $item2->idU): ?>
                                                <h3><?php echo e($item2->nombre); ?></h3>
                                                <img src="/<?php echo e($item2->path); ?>" alt="" width="100px" height="100px">
                                        <?php endif; ?>
                                    <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                <p><?php echo e($item->titulo); ?></p>
                                <p><?php echo e($item->descripcion); ?></p>
                                <p> <b>Lugar:</b>  <?php echo e($item->lugar); ?></p>
                                <p> <b>Fecha:</b> <?php echo e($item->fecha); ?></p>
                                <p>Hora: <?php echo e($item->hora); ?></p>
                                <p>Costo: $<?php echo e($item->costo); ?>.00 mxn</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                        <?php if(auth()->guard()->guest()): ?>
                                    <?php else: ?>
                                        <?php if(Auth::user()->id == $item->idR): ?>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <form action="/eventos/<?php echo e($item->id); ?>/edit">
                                                    <button class="boton-edit" type="submit">
                                                    Editar
                                                    </button>
                                                </form>
                                            </div>
                                            <div>
                                            <form action="/eventos/<?php echo e($item->id); ?>" method="POST">
                                                <?php echo csrf_field(); ?> 
                                                <?php echo method_field('DELETE'); ?>
                                                <button class="boton-elim" type="submit">
                                                Eliminar
                                                </button>
                                            </form>
                                            </div>
                                        </div>   
                                        <?php endif; ?>
                                <?php endif; ?>
                        </div>

                        <br>
                                
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </div>
<?php $__env->stopSection(); ?>




 
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Documentos\GitHub\Music-App-SLP\MusicApp\resources\views/eventos/index.blade.php ENDPATH**/ ?>
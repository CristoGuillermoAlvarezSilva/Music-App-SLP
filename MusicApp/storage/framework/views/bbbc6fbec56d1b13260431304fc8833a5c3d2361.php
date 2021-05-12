
<?php $__env->startSection('title'); ?>
    Eventos
<?php $__env->stopSection(); ?>


<!--Contenido de la pagina-->
<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Eventos</h1>
    <?php if(auth()->guard()->guest()): ?>

    <?php else: ?>
        <a class="btn btn-dark" type="button" href="/eventos/create">
            Agregar Evento
        </a>
    <?php endif; ?>


    <!--Todos usuarios-->
   <div class="categoria-items row py-5">

                <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                    <div class="categoria-item col-12 col-md-3 pt-1">
                        <div class="car">
                            <div class="fon">
                                <img src="/<?php echo e($item->path); ?>" alt="" width="300px" height="250px">
                                <div class="card-body">
                                    <div class="card-title">
                                        <ul class="tipo justify-content-center">Banda: <?php echo e($item->nombre); ?></ul>
                                        <ul class="tipo justify-content-center">Titulo del evento:<?php echo e($item->titulo); ?></ul>
                                        <ul class="tipo justify-content-center">Descripcion: <?php echo e($item->descripcion); ?></ul>
                                        <ul class="tipo justify-content-center">Lugar: <?php echo e($item->lugar); ?></ul>
                                        <ul class="tipo justify-content-center">Fecha: <?php echo e($item->fecha); ?></ul>
                                        <ul class="tipo justify-content-center">Hora: <?php echo e($item->hora); ?></ul>
                                        <ul class="tipo justify-content-center">Costo: <?php echo e($item->costo); ?></ul>
                                    </div>
                                </div>
                               
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php else: ?>
                                        <?php if(Auth::user()->id == $item->idR): ?>
                                            <div class="d-flex">
                                                <a href="/eventos/<?php echo e($item->id); ?>/edit" class="btn btn-info">
                                                    Editar
                                                </a>
                                            </div>
                                            <form action="/eventos/<?php echo e($item->id); ?>" method="POST">
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




 
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/eventos/index.blade.php ENDPATH**/ ?>
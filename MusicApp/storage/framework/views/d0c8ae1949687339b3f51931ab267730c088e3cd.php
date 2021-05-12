

<?php $__env->startSection('title'); ?>
    MusicApp
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3>Representante</h3>
    
    <?php if($error != ""): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e($error); ?>

    </div>
    <?php endif; ?>

    <form action="/representantes/<?php echo e($item->id); ?>" class="form-row" method="POST" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> 
        <img src="/<?php echo e($item->path); ?>" alt="" width="300px" height="250px">
        <div class="form-group col-2">
            <label for="nombre"><?php echo e($item->nombre); ?></label>
            <label for="tipo"><?php echo e($item->tipo); ?></label>
            <label for="des"><?php echo e($item->descripcion); ?></label>
           
        </div>
        <?php
            $video_id = $item->video;


        ?>
        <div>
   
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>


        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>

  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/representantes/editar.blade.php ENDPATH**/ ?>
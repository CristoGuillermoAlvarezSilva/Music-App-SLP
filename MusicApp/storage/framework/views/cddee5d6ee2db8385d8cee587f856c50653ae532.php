<?php if(auth()->guard()->guest()): ?>
    <?php else: ?>
        <?php if(Auth::user()->id == $item->idR): ?>


<?php $__env->startSection('title'); ?>
    Editar blog
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h3>Editar blog</h3>
   
    <form action="/novedades/<?php echo e($item->id); ?>" class="form-row" method="POST" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> 
        <input type="text" name="idR" class="form-control" value="<?php echo e(Auth::user()->id); ?>" hidden>
        <div class="form-group col-4">
            <label for="titulo">Titulo: </label>
            <input type="text" name="titulo" class="form-control" value="<?php echo e($item->titulo); ?>">

        </div>
       
        <div class="form-group col-4">
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" class="form-control" value="<?php echo e($item->descripcion); ?>">

        </div>
        <div class="form-group col-4">
            <label for="fecha">Fecha del evento:</label>
            <input type="date" name="fecha" class="form-control" value="<?php echo e($item->fecha); ?>">

        </div>
        <div class="form-group col-10">
            <label for="video">Video de Youtube</label>
            <input type="text" name="video" class="form-control" value="<?php echo e($item->video); ?>">

        </div>
       
       
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php endif; ?>
        <?php endif; ?>

<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/novedades/editar.blade.php ENDPATH**/ ?>
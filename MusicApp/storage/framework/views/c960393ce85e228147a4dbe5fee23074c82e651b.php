<?php if(auth()->guard()->guest()): ?>
    <?php else: ?>
        <?php if(Auth::user()->id == $item->idR): ?>


<?php $__env->startSection('title'); ?>
    Editar evento
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h3>Editar evento</h3>
   
    <form action="/eventos/<?php echo e($item->id); ?>" class="form-row" method="POST" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> 
        <input type="text" name="idR" class="form-control" value="<?php echo e(Auth::user()->id); ?>" hidden>
        <div class="form-group col-4">
            <labe for="titulo">Nombre del evento: </labe>
            <input type="text" name="titulo" class="form-control" value="<?php echo e($item->titulo); ?>">

        </div>
       
        <div class="form-group col-4">
            <labe for="descripcion">Descripcion del evento:</labe>
            <input type="text" name="descripcion" class="form-control" value="<?php echo e($item->descripcion); ?>">

        </div>
        <div class="form-group col-4">
            <labe for="lugar">Lugar del evento:</labe>
            <input type="text" name="lugar" class="form-control" value="<?php echo e($item->lugar); ?>">

        </div>
        <div class="form-group col-4">
            <labe for="fecha">Fecha del evento:</labe>
            <input type="date" name="fecha" class="form-control" value="<?php echo e($item->fecha); ?>">

        </div>
        <div class="form-group col-4">
            <labe for="hora">Hora del evento:</labe>
            <input type="time" name="hora" class="form-control" value="<?php echo e($item->hora); ?>">

        </div>
        <div class="form-group col-4">
            <labe for="costo">Costo:</labe>
            <input type="text" name="costo" class="form-control" value="<?php echo e($item->costo); ?>">

        </div>
       
        <div class="form-group col-10">
            <labe for="imagen">Imagen</labe>
            <input type="file" name="imagen" class="form-control">

        </div>
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php endif; ?>
        <?php endif; ?>

<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/eventos/editar.blade.php ENDPATH**/ ?>
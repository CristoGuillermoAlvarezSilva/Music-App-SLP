
<?php $__env->startSection('title'); ?>
    Blog
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Music App
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3>Blog</h3>
   

    <form action="/novedades" class="form-row" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>

            <input type="text" name="idR" class="form-control" value="<?php echo e(Auth::user()->id); ?>" hidden>
       
        <div class="form-group col-4">
            <labe for="titulo">Titulo:</labe>
            <input type="text" name="titulo" class="form-control">

        </div>
        <div class="form-group col-4">
            <labe for="descripcion">Descripción:</labe>
            <input type="text" name="descripcion" class="form-control">

        </div>
       
        <div class="form-group col-4">
            <labe for="fecha">Fecha del evento:</labe>
            <input type="date" name="fecha" class="form-control">

        </div>
        <div class="form-group col-10">
            <label for="video">Video de Youtube</label>
            <input type="text" name="video" class="form-control">

        </div>

        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/novedades/create.blade.php ENDPATH**/ ?>
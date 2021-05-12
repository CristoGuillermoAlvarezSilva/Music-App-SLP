
<?php $__env->startSection('title'); ?>
    Blog
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Music App
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="card-body titulo-pags">Blog</h3>
   
    <div class="card">
    
   

    <form action="/novedades" class="form-row" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>

            <input type="text" name="idR" class="form-control" value="<?php echo e(Auth::user()->id); ?>" hidden>
       
        <div class="form-group col-4">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" class="form-control">

        </div>
        <div class="form-group col-4">
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" class="form-control">

        </div>
       
        <div class="form-group col-4">
            <label for="fecha">Fecha del evento:</label>
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

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Documentos\GitHub\Music-App-SLP\MusicApp\resources\views/novedades/create.blade.php ENDPATH**/ ?>
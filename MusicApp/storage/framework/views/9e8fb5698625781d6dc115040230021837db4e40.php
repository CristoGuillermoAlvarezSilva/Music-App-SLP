<?php if(auth()->guard()->guest()): ?>
    <?php else: ?>
        <?php if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador"): ?>

<?php $__env->startSection('title'); ?>
    Generos musicales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Music App
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3>Generos Musicales</h3>
   

    <form action="/generos" class="form-row" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <div class="form-group col-4">
            <labe for="genero">Genero</labe>
            <input type="text" name="genero" class="form-control">

        </div>
       
        <div class="form-group col-10">
            <labe for="imagen">Imagen</labe>
            <input type="file" name="imagen" class="form-control">

        </div>
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php endif; ?>
        <?php endif; ?>
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/generos/create.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title'); ?>
    MusicApp
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3>Representante</h3>
   

    <form action="/representantes" class="form-row" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
       
            <input type="text" name="idU" class="form-control" value="<?php echo e(Auth::user()->id); ?>" hidden>

        <div class="form-group col-4">
            <label for="tipo">Solista o Agrupación</label>
            <select name="tipo" class="form-control">
                    <option>Solista</option></option>
                    <option >Agrupación</option>
            </select>

        </div>
        <div class="form-group col-4">
            <label for="nombre">Nombre Banda/Solista</label>
            <input type="text" name="nombre" class="form-control">

        </div>
        <div class="form-group col-4">
            <label for="genero">Genero Musical</label>
            <select name="genero" class="form-control">
            <?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($genero->genero); ?>"><?php echo e($genero->genero); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

        </div>
        <div class="form-group col-4">
            <label for="nombre">Descripción</label>
            <input type="text" name="descripcion" class="form-control">

        </div>
      
        <div class="form-group col-10">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" class="form-control">

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
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/representantes/create.blade.php ENDPATH**/ ?>
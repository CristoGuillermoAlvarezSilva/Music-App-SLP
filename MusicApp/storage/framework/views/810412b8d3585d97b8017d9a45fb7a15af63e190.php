

<?php $__env->startSection('title'); ?>
    MusicApp
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3>Parametros</h3>
   

    <form action="/parametros/<?php echo e($item->id); ?>" class="form-row" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
       
        <input type="text" name="idR" class="form-control" value="<?php echo e(Auth::user()->id); ?>" hidden>

       
        <div class="form-group col-4">
            <label for="precioBase">Precio Base</label>
            <input type="text" name="precioBase" class="form-control" value="<?php echo e($item->precioBase); ?>">
            <label for="personasBase">Numero de personas Base</label>
            <input type="text" name="personasBase" class="form-control" value="<?php echo e($item->personasBase); ?>">

        </div>

        <div class="form-group col-4">
            <label for="precioMedio">Precio Medio</label>
            <input type="text" name="precioMedio" class="form-control" value="<?php echo e($item->precioMedio); ?>">
            <label for="personasMedio">Numero de personas Medio</label>
            <input type="text" name="personasMedio" class="form-control" value="<?php echo e($item->personasMedio); ?>">

        </div>
        <div class="form-group col-4">
            <label for="precioAlto">Precio Alto</label>
            <input type="text" name="precioAlto" class="form-control" value="<?php echo e($item->precioAlto); ?>">
            <label for="personaA">Numero de personas Alto</label>
            <input type="text" name="personasAlto" class="form-control" value="<?php echo e($item->personasAlto); ?>">

        </div>
        <div class="form-group col-4">
            <label for="precioMax">Precio Maximo</label>
            <input type="text" name="precioMax" class="form-control" value="<?php echo e($item->precioMax); ?>">
            <label for="personasMax">Numero de personas Maximo</label>
            <input type="text" name="personasMax" class="form-control" value="<?php echo e($item->personasMax); ?>">

        </div>

        <div class="form-group col-4">
            <label for="anticipo">Porcentaje de Anticipo</label>
            <input type="text" name="anticipo" class="form-control" value="<?php echo e($item->anticipo); ?>">
            

        </div>
        
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/parametros/editar.blade.php ENDPATH**/ ?>

         
                           
<?php $__env->startSection('title'); ?>
    Editar usuarios
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="py-4 text-center ">Editar Usuario</h3>
    <?php if($error != ""): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e($error); ?>

        </div>
    <?php endif; ?>
    <form action="/users/<?php echo e($item->id); ?>" class="form-row" method="POST" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> 
      
      
        
        <?php if(auth()->guard()->guest()): ?>
            <?php else: ?>
                <?php if(Auth::user()->rol == "super"): ?>
                <div class="form-group col-4">
                   
                        <input type="text" name="name" class="form-control" value="<?php echo e($item->name); ?>" hidden>
                    </div>
                    <div class="form-group col-4">
           
                        <input type="text" name="email" class="form-control" value="<?php echo e($item->email); ?>" hidden>
                    </div>
                    <div class="form-group col-4">
               
                        <input type="password" name="password" class="form-control" hidden>
                    </div>
            <div class="form-group col-4">
                <label for="rol">Rol: </label>
                <select name="rol" class="form-control">
                    <option >Normal</option>
                    <option >Administrador</option>
                </select>

            </div>

        <?php endif; ?>
        <?php endif; ?>

        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

 
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/users/editar.blade.php ENDPATH**/ ?>
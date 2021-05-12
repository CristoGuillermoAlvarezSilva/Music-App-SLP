
<?php $__env->startSection('title'); ?>
    Pametros
<?php $__env->stopSection(); ?>


<!--Contenido de la pagina-->
<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Parámetros</h1>
   
    <!--Todos usuarios-->
   <div class="categoria-items row py-5">
                <?php
                     $ban=0;
              
                ?>
               
                <?php $__currentLoopData = $parametros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                            <?php if(Auth::user()->id == $item->idR): ?>
                            <?php
                                $ban=1;
                                  
                            ?>
                               
                                        <div class="form-group col-4">
                                            <label for="precioBase">Precio Base</label>
                                            <input type="text" name="precioBase" class="form-control" value="<?php echo e($item->precioBase); ?>" readonly>
                                            <label for="personasBase">Número de personas Base</label>
                                            <input type="text" name="personasBase" class="form-control" value="<?php echo e($item->personasBase); ?>" readonly>

                                        </div>

                                        <div class="form-group col-4">
                                            <label for="precioMedio">Precio Medio</label>
                                            <input type="text" name="precioMedio" class="form-control" value="<?php echo e($item->precioMedio); ?>" readonly>
                                            <label for="personasMedio">Número de personas Medio</label>
                                            <input type="text" name="personasMedio" class="form-control" value="<?php echo e($item->personasMedio); ?>" readonly>

                                        </div>
                                        <div class="form-group col-4">
                                            <label for="precioAlto">Precio Alto</label>
                                            <input type="text" name="precioAlto" class="form-control" value="<?php echo e($item->precioAlto); ?>" readonly>
                                            <label for="personaA">Número de personas Alto</label>
                                            <input type="text" name="personasAlto" class="form-control" value="<?php echo e($item->personasAlto); ?>" readonly>

                                        </div>
                                        <div class="form-group col-4">
                                            <label for="precioMax">Precio Maximo</label>
                                            <input type="text" name="precioMax" class="form-control" value="<?php echo e($item->precioMax); ?>" readonly>
                                            <label for="personasMax">Número de personas Maximo</label>
                                            <input type="text" name="personasMax" class="form-control" value="<?php echo e($item->personasMax); ?>" readonly>

                                        </div>

                                        <div class="form-group col-4">
                                            <label for="anticipo">Porcentaje de Anticipo</label>
                                            <input type="text" name="anticipo" class="form-control" value="<?php echo e($item->anticipo); ?>" readonly>
                                            

                                        </div>
                                        <div class="form-group col-4">
                                            <a class="btn btn-dark" type="button" href="/parametros/<?php echo e($item->id); ?>/edit">
                                                Editar parametros
                                            </a>
                                        </div>

                                       
                             
                            <?php endif; ?>
                            
                        <?php endif; ?>

                      
                            
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   

                <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                            <?php if($ban == 0 ): ?>
                                <a class="btn btn-dark" type="button" href="/parametros/create">
                                    Crear Parametros
                                </a>
                            <?php endif; ?>
                            
                        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Documentos\GitHub\Music-App-SLP\MusicApp\resources\views/parametros/index.blade.php ENDPATH**/ ?>
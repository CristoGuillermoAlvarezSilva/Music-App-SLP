<?php $__env->startSection('title'); ?>
  Inicio
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <!--Primer modulo modulo-->
 <a class="btn btn-dark" type="button" href="/eventos">
      Eventos
  </a>
  <a class="btn btn-dark" type="button" href="/novedades">
      Blog
  </a>
 <?php if(auth()->guard()->guest()): ?>



 <?php else: ?>

  <a class="btn btn-dark" type="button" href="/representantes/create">
                           Crear representante
  </a>

 
  <a class="btn btn-dark" type="button" href="/parametros">
                           Parametros
  </a>
 

  <?php endif; ?>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('./layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views/welcome.blade.php ENDPATH**/ ?>
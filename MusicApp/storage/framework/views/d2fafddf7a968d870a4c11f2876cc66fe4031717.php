



<?php $__env->startSection('title'); ?>
  Inicio
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <!--Primer modulo modulo-->

 <?php if(auth()->guard()->guest()): ?>



<?php else: ?>




 <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('./layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marii\OneDrive\Documentos\GitHub\Music-App-SLP\MusicApp\resources\views/welcome.blade.php ENDPATH**/ ?>
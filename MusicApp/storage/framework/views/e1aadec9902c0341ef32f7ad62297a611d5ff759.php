<style>
.fondo{
    background-color:#000000;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body class="bg-white">
    <div class="container-fluid">

        <!--Encabezado-->
        <div class="fondo row">
            <a class="col-6 py-3" href="/">
                <div class="d-inline-block" id="logo">
                    <img src="<?php echo e(asset('img/logo.png')); ?>" alt="logo" class="img-fluid" width="150" >
                </div>
              
            </a>
            <div class=" col-6 p-2 py-3">
                <div class="d-flex justify-content-end">
                    <div class="ml-3 text-right d-inline-block">
                        <?php if(auth()->guard()->guest()): ?>
                        <a class="btn btn-dark" type="button" href="/login">
                            Inicio de sesión
                        </a>
                        
                        <a class="btn btn-dark" type="button" href="/register">
                            Registrarse
                        </a>
                        <?php else: ?>
                        <button class="btn btn-dark" data-toggle="collapse" data-target="#menu_user">
                          
                            <?php echo e(Auth::user()->name); ?>

                        </button>
                        <div class="collapse" id="menu_user">
                           
                            <a class="btn btn-dark" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <?php echo e(__('Salir')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                        <?php endif; ?>
                    </div>
                    
                </div>
                
                <div class="mt-4 py-3">
                    <ul class=" text-center">
                   
                        <a class="btn btn-dark" href="/">Incio</a>
                       
                        <a class="btn btn-dark" href="/generos">Artistas</a>
                        <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                            <?php if(Auth::user()->rol == "super"): ?>
                            <a class="btn btn-dark" href="/administrador">Panel SuperUsuario</a>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                            <?php if(Auth::user()->rol == "Administrador"): ?>
                            <a class="btn btn-dark" href="/administrador">Panel Administrador</a>
                            <?php endif; ?>
                        <?php endif; ?>
                   
                    </ul>
                </div>
                
            </div>
          
            
            
             
        </div>
      
        
        <div id="page-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        
        <!--Pie de pagina-->
        <div class="fondo d-none d-md-block row py-2 ">
                <h3 class="text-center text-white">Contactanos</h3>
                
        </div>

     
    </div>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Users\marii\OneDrive\Desktop\Decimo\Integrador\Music App Proyecto\MusicApp\resources\views////layouts/app.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title><?php echo $__env->yieldContent('title'); ?></title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/fontawesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
 <div class="row">
 <div class="col-lg-12 col-sm-12 col-12 main-section">
 <div class="dropdown">
 <button type="button" class="btn btn-info" datatoggle="dropdown">
 <a href="<?php echo e(url('cart')); ?>" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Cos</a></td>
 </button>
 <div class="dropdown-menu">
 <div class="row total-header-section">
 <div class="col-lg-6 col-sm-6 col-6">
 <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger"><?php echo e(count((array) session('cart'))); ?></span>
 </div>
 <?php $total = 0 ?>
 <?php $__currentLoopData = (array) session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <?php $total += $details['pret'] * $details['cantitate'] ?>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
 <p>Total: <span class="text-info">$ <?php echo e($total); ?></span></p>
 </div>
 </div>
 <?php if(session('cart')): ?>
 <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="row cart-detail">
 <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
 <img src="<?php echo e($details['imagine']); ?>" />
 </div>
 <div class="col-lg-8 col-sm-8 col-8 cart-detailproduct">
 <p><?php echo e($details['nume']); ?></p>
<span class="pret text-info"> Lei <?php echo e($details['pret']); ?></span> <span class="count"> Cantitate:<?php echo e($details['cantitate']); ?></span>
 </div>
 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?>
 <div class="row">
 <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
 <a href="<?php echo e(url('cart')); ?>" class="btn btn-primary btnblock">Afisare tot</a>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container page">
 <?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
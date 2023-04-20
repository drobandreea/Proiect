<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>
 <div class="container products">
 <div class="row">
 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-xs-18 col-sm-6 col-md-3">
 <div class="thumbnail">
 <img src="<?php echo e($product->imagine); ?>" width="100" height="100">
 <div class="caption">
 <h4><?php echo e($product->nume); ?></h4>
 <p><?php echo e(str_limit(strtolower($product->descriere), 200)); ?></p>
 <p><strong>Pret: </strong> <?php echo e($product->pret); ?> Lei</p>
 <p class="btn-holder"><a href="<?php echo e(url('add-to-cart/'.$product->id)); ?>" class="btn btn-warning btn-block text-center" role="button">Pune in cos</a> </p>
 </div>
 </div>
 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div><!-- End row -->
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutcos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
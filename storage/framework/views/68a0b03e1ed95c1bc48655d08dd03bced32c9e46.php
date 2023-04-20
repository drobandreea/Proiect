<?php $__env->startSection('content'); ?>
 <div class="panel panel-default">
 <div class="panel-heading">Produse lista</div>
 <div class="panel-body">
 <div class="pull-right">
 <a class="btn btn-default" href="<?php echo e(route('aliments.index')); ?>">Inapoi</a>
 </div>
 <div class="form-group">
 <strong>Nume: </strong> <?php echo e($aliment->nume); ?>

 </div>
 <div class="form-group">
 <strong>Descriere: </strong> <?php echo e($aliment->descriere); ?>

 <div class="form-group">
 <strong>Pret: </strong> <?php echo e($aliment->pret); ?>

 </div>
 </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
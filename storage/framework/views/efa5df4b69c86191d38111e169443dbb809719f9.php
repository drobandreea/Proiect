<?php $__env->startSection('content'); ?>
 <div class="panel panel-default">
 <div class="panel-heading">Adauga produs nou in lista ta de cumparaturi!</div>
 <div class="panel-body">
<?php if(count($errors) > 0): ?>
 <div class="alert alert-danger">
 <strong>Errors:</strong>
 <ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>
 <?php echo e(Form::open(array('route' => 'aliments.store','method'=>'POST'))); ?>

<div class="form-group">
<label for="nume">Nume</label>
<input type="text" name="nume" class="form-control" value="<?php echo e(old('nume')); ?>">
</div>
<div class="form-group">
<label for="descriere">Descriere</label>
<textarea name="descriere" class="form-control" rows="3"><?php echo e(old('descriere')); ?></textarea>
</div>
<div class="form-group">
<label for="pret">Pret</label>
<input type="text" name="pret" class="form-control" value="<?php echo e(old('pret')); ?>">
</div>
<div class="form-group">
<input type="submit" value="Adauga Sarcina" class="btn btn-info">
<a href="<?php echo e(route('aliments.index')); ?>" class="btn btndefault">Cancel</a>
</div>
 <?php echo e(Form::close()); ?>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
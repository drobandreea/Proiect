<?php $__env->startSection('content'); ?>
 <?php if($message = Session::get('success')): ?>
 <div class="alert alert-success">
 <p><?php echo e($message); ?></p>
 </div>
 <?php endif; ?>
 <div class="panel panel-default">
 <div class="panel-heading">
 Lista produse pe care doriti sa le cumparati
 </div>
 <div class="panel-body">
 <div class="form-group">
 <div class="pull-right">
 <a href="/aliments/create" class="btn btn-default">Adaugare Produs Nou</a>
 <div> <a href="<?php echo e(URL::to('/')); ?>" class="btn btn-default"> Spre lista de cumparaturi</a> </div>
 </div>
 </div>
 <table class="table table-bordered table-stripped">
 <tr>
 <th width="20">No</th>
 <th>Nume</th>
 <th>Descriere</th>
 <th>Pret</th>
 <th width="300">Actiune</th>
 </tr>
 <?php if(count($aliments) > 0): ?>
 <?php $__currentLoopData = $aliments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $aliment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td><?php echo e(++$i); ?></td>
 <td><?php echo e($aliment->nume); ?></td>
 <td><?php echo e($aliment->descriere); ?></td>
 <td><?php echo e($aliment->pret); ?></td>
 <td>
 <a class="btn btn-success" href="<?php echo e(route('aliments.show',$aliment->id)); ?>">Vizualizare</a>
 <a class="btn btn-primary" href="<?php echo e(route('aliments.edit',$aliment->id)); ?>">Modificare</a>
 <?php echo e(Form::open(['method' => 'DELETE','route' =>['aliments.destroy', $aliment->id],'style'=>'display:inline'])); ?>

 <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

 <?php echo e(Form::close()); ?>

 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php else: ?>
 <tr>
 <td colspan="4">Nu exista alimente!</td>
 </tr>
 <?php endif; ?>
 </table>
<!-- Introduce nr pagina -->
<?php echo e($aliments->render()); ?>

 </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
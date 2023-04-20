<?php $__env->startSection('title', 'Cart'); ?>
<?php $__env->startSection('content'); ?>
 <table id="cart" class="table table-hover table-condensed">
 <thead>
 <tr>
 <th style="width:50%">Product</th>
 <th style="width:10%">Pret</th>
 <th style="width:8%">Cantitate</th>
 <th style="width:22%" class="text-center">Subtotal</th>
 <th style="width:10%"></th>
 </tr>
 </thead>
 <tbody>
 <?php $total = 0 ?>
 <?php if(session('cart')): ?>
 <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <?php $total += $details['pret'] * $details['cantitate'] ?>
 <tr>
 <td data-th="Product">
 <div class="row">
 <div class="col-sm-3 hidden-xs"><img src="<?php echo e($details['imagine']); ?>" width="100" height="100" class="imgresponsive"/></div>
 <div class="col-sm-9">
 <h4 class="nomargin"><?php echo e($details['nume']); ?></h4>
 </div>
 </div>
 </td>
 <td data-th="Pret">Lei <?php echo e($details['pret']); ?></td>
 <td data-th="Cantitate">
 <input type="number" value="<?php echo e($details['cantitate']); ?>" class="form-control cantitate" />
 </td>
 <td data-th="Subtotal" class="text-center">Lei <?php echo e($details['pret'] * $details['cantitate']); ?></td>
 <td class="actions" data-th="">
 <button class="btn btn-info btn-sm update-cart" data-id="<?php echo e($id); ?>"><i class="fa fa-refresh"></i>Update</button> 
 <button class="btn btn-danger btn-sm remove-from-cart" data-id="<?php echo e($id); ?>"><i class="fa fa-trash-o"></i>Delete</button>
 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?>
 </tbody>
 <tfoot>
 <tr class="visible-xs">
 <td class="text-center"><strong>Total <?php echo e($total); ?> lei</strong></td>
 </tr>
 <tr>
 <td><a href="<?php echo e(url('/')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuare Cumparaturi</a></td>
 <td colspan="2" class="hidden-xs"></td>
 <td class="hidden-xs text-center"><strong>Total <?php echo e($total); ?> lei</strong></td>
 </tr>
 </tfoot>
 </table>
<?php $__env->startSection('scripts'); ?>
 <script type="text/javascript">
 $(".update-cart").click(function (e) {
 e.preventDefault();
 var ele = $(this);
 $.ajax({
 url: '<?php echo e(url('update-cart')); ?>',
 method: "patch",
 data: {_token: '<?php echo e(csrf_token()); ?>', 
 id: ele.attr("data-id"), 
 cantitate: ele.parents("tr").find(".cantitate").val()},
 success: function (response) {
 window.location.reload();
 }
 });
 });
 $(".remove-from-cart").click(function (e) {
 e.preventDefault();
 var ele = $(this);
 if(confirm("Esti sigur!!!")) {
 $.ajax({
 url: '<?php echo e(url('remove-from-cart')); ?>',
 method: "DELETE",
 data: {_token: '<?php echo e(csrf_token()); ?>', 
 id: ele.attr("data-id")},
 success: function (response) {
 window.location.reload();
 }
 });
 }
 });
 </script>
<?php $__env->stopSection(); ?>
 <script type="text/javascript">
 $(".update-cart").click(function (e) {
 e.preventDefault();
 var ele = $(this);
 $.ajax({
 url: '<?php echo e(url('update-cart')); ?>',
 method: "patch",
 data: {_token: '<?php echo e(csrf_token()); ?>', 
 id: ele.attr("data-id"),
 cantitate: ele.parents("tr").find(".cantitate").val()},
 success: function (response) {
 window.location.reload();
 }
 });
 });
 $(".remove-from-cart").click(function (e) {
 e.preventDefault();
 var ele = $(this);
 if(confirm("Esti sigur!!!")) {
 $.ajax({
 url: '<?php echo e(url('remove-from-cart')); ?>',
 method: "DELETE",
 data: {_token: '<?php echo e(csrf_token()); ?>', 
 id: ele.attr("data-id")},
 success: function (response) {
 window.location.reload();
 }
 });
 }
 });
 </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutcos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
	<div class="text-left"><h1>Edit: <?php echo $product->product_name; ?></h1></div><div class="text-right"><button class="btn btn-primary" name="back_to_products">Back to Products</button></div>
	<hr>
	<?php echo Form::model($product, [ 'action' => ['ProductsController@update', $product->id] , 'files' => true, 'method' => 'PATCH']); ?>

		<?php echo $__env->make('products._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::close(); ?>


	<?php echo $__env->make('errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
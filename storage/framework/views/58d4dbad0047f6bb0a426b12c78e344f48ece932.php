<?php $__env->startSection('content'); ?>
<h1>Contact <?php echo $name; ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<script> alert('Contact form scripts');</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startPush('metas'); ?>
<meta name="access-token" content="<?php echo e($token); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-6">
                <h1 class="m-0 text-dark">Products</h1>
            </div>
            <div class="col-6">
                <a href="<?php echo e(route('product.form')); ?>" class="btn btn-primary btn-round float-right">Create</a>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div id="app" class="col">
                <product-list-component :category-enum="<?php echo e($categories); ?>" />
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', [
    'bodyClass' => 'hold-transition sidebar-mini layout-fixed'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jac/qa-engineer-exam-main/resources/views/product/index.blade.php ENDPATH**/ ?>
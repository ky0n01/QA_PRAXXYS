<?php $__env->startPush('metas'); ?>
<meta name="access-token" content="<?php echo e($token); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="content pt-3">
    <div class="container-fluid">
        <div class="row">
            <div id="app" class="col col-md-8 mx-auto">
                <product-form-component :product="<?php echo e($product); ?>" :category-enum="<?php echo e($categories); ?>" />
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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jac/qa-engineer-exam-main/resources/views/product/form.blade.php ENDPATH**/ ?>
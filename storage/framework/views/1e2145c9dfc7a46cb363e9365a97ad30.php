<?php $__env->startSection('content'); ?>
<div class="container error-container">
    <h1 class="display-4">404 - Page Not Found</h1>
    <p class="lead">Sorry, the page you are looking for could not be found.</p>
    <p class="text-muted"><a href="<?php echo e(route('login')); ?>">Return</a>.</p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'bodyClass' => 'hold-transition login-page'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jac/qa-engineer-exam-main/resources/views/errors/404.blade.php ENDPATH**/ ?>
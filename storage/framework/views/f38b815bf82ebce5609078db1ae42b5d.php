<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo $__env->yieldPushContent('metas'); ?>

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
        <?php echo $__env->yieldPushContent('styles'); ?>
    </head>
    <body class="antialiased <?php echo e($bodyClass ?? ''); ?>">
        <?php if(auth()->guard()->guest()): ?>
            <?php echo $__env->yieldContent('content'); ?>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
            <div class="wrapper">
                <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="content-wrapper">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
            <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
        <?php endif; ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <?php echo app('Illuminate\Foundation\Vite')([
        'resources/js/plugins/jquery/jquery.min.js',
        'resources/js/dist/js/adminlte.js'
    ]); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</html>
<?php /**PATH /home/jac/qa-engineer-exam-main/resources/views/layouts/app.blade.php ENDPATH**/ ?>
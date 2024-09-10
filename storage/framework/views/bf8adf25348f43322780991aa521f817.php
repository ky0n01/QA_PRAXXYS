
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header text-uppercase">Products</li>
                <li class="nav-item">
                    <a href="<?php echo e(route('product.index')); ?>" class="nav-link <?php echo e(Route::is('product.index') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('product.form')); ?>" class="nav-link <?php echo e(Route::is('product.form') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Create</p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="<?php echo e(route('videos')); ?>" class="nav-link <?php echo e(Route::is('videos') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-video"></i>
                        <p>Videos</p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside><?php /**PATH /home/jac/qa-engineer-exam-main/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>
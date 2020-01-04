<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
    <div class="container px-4">
        <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>">
            <img src="<?php echo e(asset('argon')); ?>/img/brand/white.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="<?php echo e(URL::to('/')); ?>">
                            <img src="<?php echo e(asset('argon')); ?>/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="<?php echo e(URL::to('/')); ?>">
                        <i class="ni ni-planet"></i>
                        <span class="nav-link-inner--text"><?php echo e(__('Trang chủ')); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="<?php echo e(route('login', 'facebook')); ?>">
                        <i class="fab fa-facebook-square"></i>
                        <span class="nav-link-inner--text"><?php echo e(__('Đăng Nhập')); ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH /Users/chenjinguyen/Websever/techviews/resources/views/layouts/navbars/navs/guest.blade.php ENDPATH**/ ?>
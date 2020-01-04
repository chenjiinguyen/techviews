<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->

        <a class="navbar-brand pt-0" href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('argon')); ?>/img/brand/red.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="<?php echo e(auth()->user()->avatar); ?>">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0"><?php echo e(__('Chào Mừng!')); ?></h6>
                    </div>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span><?php echo e(__('Bài Viết Của Bạn')); ?></span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span><?php echo e(__('Đăng Xuất')); ?></span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                            <img src="<?php echo e(asset('argon')); ?>/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fa fa-home text-primary"></i> <?php echo e(__('Trang chủ')); ?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/search">
                        <i class="fa fa-search text-blue"></i> <?php echo e(__('Tìm kiếm')); ?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">

                        <i class="fa fa-bolt text-blue"></i> <?php echo e(__('Bài viết mới')); ?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-chart-bar text-primary"></i> <?php echo e(__('Xem rank top 50')); ?>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-lock text-primary"></i> <?php echo e(__('Khoá link')); ?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#hashtag" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="hashtag">
                        <i class="fas fa-hashtag text-blue"></i>
                        <span class="nav-link-text"><?php echo e(__('Hashtag')); ?></span>
                    </a>

                    <div class="collapse show" id="hashtag">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="#">
                                    <span class="nav-link-text">
                                        <i class="fas fa-hashtag"></i>
                                        <?php echo e(__('techviews_share')); ?>

                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="#">
                                    <span class="nav-link-text">
                                        <i class="fas fa-hashtag"></i>
                                        <?php echo e(__('techviews_relax')); ?>

                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#follow" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="follow">
                        <i class="fas fa-star text-blue"></i>
                        <span class="nav-link-text"><?php echo e(__('Theo dõi')); ?></span>
                    </a>

                    <div class="collapse" id="follow">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-default" href="#">
                                    <i class="fas fa-newspaper"></i>
                                    <span class="nav-link-text"><?php echo e(__('Bài viết')); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-default" href="#">
                                    <i class="fas fa-user"></i>
                                    <span class="nav-link-text"><?php echo e(__('Thành viên')); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-logout">
                    <a href="<?php echo e(route('logout')); ?>" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt text-primary"></i> <?php echo e(__('Đăng xuất')); ?>

                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /Users/chenjinguyen/Websever/techviews/resources/views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>
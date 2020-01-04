<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-10'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image pt-md-4 pb-md-4 mb-md-4">
                                <a href="#">
                                    <img src="<?php echo e(auth()->user()->avatar); ?>" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-between mt-md-5">
                                    <div>
                                        <span class="heading"><?php echo e(__($totalPost)); ?></span>
                                        <span class="description"><?php echo e(__('Post')); ?></span>
                                    </div>

                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description"><?php echo e(__('Follows')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-2 mb-3">
                            <h3><?php echo e(auth()->user()->name); ?></h3>
                            <div class="h5">Thành viên của <?php echo e(config('app.name')); ?></div>
                        </div>
                        <div class="font-weight-light"><hr>4 người theo dõi</div>
                        <div class="avatar-group mt-4">
                            <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="<?php echo e(auth()->user()->avatar); ?>" class="rounded-circle">
                            </a>
                            <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="<?php echo e(auth()->user()->avatar); ?>" class="rounded-circle">
                            </a>
                            <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                              <img alt="Image placeholder" src="<?php echo e(auth()->user()->avatar); ?>" class="rounded-circle">
                            </a>
                            <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="<?php echo e(auth()->user()->avatar); ?>" class="rounded-circle">
                            </a>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Bài viết Của Tôi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Tiêu Đề</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Lượt Xem</th>
                                    <th scope="col">Lượt Mở Khóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = App\Post::all()->sortByDesc('created_at'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row">
                                        <a href="/post/<?php echo e($post->id); ?>" ><?php echo e($post->title); ?></a>
                                    </th>
                                    <td>
                                        <?php echo e($post->created_at); ?>

                                    </td>
                                    <td>
                                        <?php echo e($post->views); ?>

                                    </td>
                                    <td>
                                        <?php echo e($post->unlock); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => __('User Profile')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/chenjinguyen/Websever/techviews/resources/views/users/profile.blade.php ENDPATH**/ ?>
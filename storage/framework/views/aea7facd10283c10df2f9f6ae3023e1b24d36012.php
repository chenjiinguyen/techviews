<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Bài viết Ẩn</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Xem Tất Cả Các Bài Viết Ẩn</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Tiêu Đề</th>
                                    <th scope="col">Tác Giả</th>
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
                                    <?php $author = App\User::where('real_id',$post->id_author)->first(); ?>
                                        <a href="https://www.facebook.com/<?php echo e($post->id_author); ?>" target="_blank" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="<?php echo e($author->name); ?>">
                                        <img alt="Image placeholder" src="<?php echo e($author->avatar); ?>" class="rounded-circle">
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
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Thành Viên Nhiều Bài Viết</h3>
                            </div>
                            <!-- <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Xem</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Thành Viên</th>
                                    <th scope="col">Bài Viết</th>
                                    <th scope="col">Chiếm Phần Trăm</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = App\User::select(DB::raw('users.*, count(*) as total_posts'))->join('posts', 'users.real_id', '=', 'posts.id_author')->groupBy('real_id')->orderBy('total_posts', 'desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row">
                                        <a href="https://www.facebook.com/<?php echo e($user->real_id); ?>" target="_blank" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="<?php echo e($user->name); ?>">
                                        <img alt="Image placeholder" src="<?php echo e($user->avatar); ?>" class="rounded-circle">
                                    </th>
                                    <td>
                                        <?php echo e($user->total_posts); ?>

                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2"><?php echo e($phantram = Round(100/App\Post::all()->count()*$user->total_posts)); ?>%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="<?php echo e($phantram); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($phantram); ?>%;"></div>
                                                </div>
                                            </div>
                                        </div>
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

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.extension.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/chenjinguyen/Websever/techviews/resources/views/dashboard.blade.php ENDPATH**/ ?>
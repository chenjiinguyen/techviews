<?php $__env->startSection('pageTitle', $pageTitle); ?>
<?php $__env->startSection('dataProtect',$dataProtect); ?>
<?php $__env->startSection('author',$author); ?>
<?php $__env->startSection('userAction',$userAction); ?>

<?php $__env->startPush("js"); ?>
<script type = "text/javascript" language = "javascript">
    $(document).ready(function() {
         $( ".card-body" ).find( "a" ).attr("target","_blank");
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $action =json_decode($userAction,true) ?>
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url('https://c.wallhere.com/photos/b9/0d/trees_forest_Tatra_Mountains_Tatra_Slovakia_mist_pine_trees-1383935.jpg!d'); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container align-items-center">
            <div class="row">
              <div class="col-lg-12 col-md-12 text-center">
                <img src="<?php echo e($author->avatar); ?>" width="128px" class="rounded-circle text-center">
                <h3 class="display-3 text-white"><?php echo e($author->name); ?></h3>
                <div class="btn btn-sm btn-warning"><i class="fas fa-file-alt"></i> Bài Viết: <?php echo e($author->countPost); ?></div>
                <a href="https://fb.com/<?php echo e($author->real_id); ?>" target="_blank" class="btn btn-sm btn-info"><i class="fas fa-user"></i> Trang Cá Nhân</a>
              </div>
            </div>
          </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-9">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h3 class="mb-0">Nội Dung Ẩn</h3>
                            </div>
                            <div class="col-4 text-right">
                                <div class="btn btn-sm btn-warning"><i class="fas fa-eye"></i> <?php echo e($dataProtect->views); ?></div>
                                <div class="btn btn-sm btn-success"><i class="fas fa-unlock"></i> <?php echo e($dataProtect->unlock); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">                
                        <?php echo $dataProtect->text; ?>

                    </div>
                </div>

                <?php if(!empty($dataProtect->id_post)): ?>
                <div class="card bg-secondary shadow mt-2">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h3 class="mb-0">Nội Dung Bài Viết Gốc</h3>
                            </div>
                            <div class="col-4 text-right">
                                 <a href="https://www.facebook.com/<?php echo e($dataProtect->id_post); ?>"  target="_blank" class="btn btn-sm btn-warning"><i class="fas fa-file-alt"></i> Bài Viết Gốc</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">            
                        <?php echo $PostinGroup; ?>

                    </div>
                </div>
                <?php endif; ?>
            </div>
          <div class="col-xl-3 mb-5 mb-xl-0">
            <div class="card">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">Điều Kiện Mở Khóa</h3>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
                <div class="mb-3"><i class="fas fa-clock"></i> Tạo lúc <?php echo e(date("d/m/Y H:i:s",strtotime($dataProtect->created_at))); ?></div>
                <?php if(!(empty($dataProtect->updated_at) || $dataProtect->created_at == $dataProtect->updated_at)): ?><div class="mb-3"><i class="fas fa-clock"></i> Cập nhật lúc <?php echo e(date("d/m/Y H:i:s",strtotime($dataProtect->updated_at))); ?></div> <?php endif; ?>
                <?php if(!empty($dataProtect->in_group)): ?>
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="ingroup" type="checkbox" disabled <?php if($action["member"]): ?> checked <?php endif; ?>>
                        <label class="custom-control-label" for="ingroup">Khóa Thành Viên</label>
                </div>
                <?php endif; ?>
                <?php if(!empty($dataProtect->reaction)): ?>
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="reaction" type="checkbox" disabled <?php if($action["reaction"]): ?> checked <?php endif; ?> >
                        <label class="custom-control-label" for="reaction">Khóa Like</label>
                </div>
                <?php endif; ?>
                <?php if(!empty($dataProtect->comment)): ?>
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="comment" type="checkbox" disabled <?php if($action["comment"]): ?> checked <?php endif; ?> >
                        <label class="custom-control-label" for="comment">Khóa Bình Luận</label>
                </div>
                <?php endif; ?>
                <?php if(!empty($dataProtect->point)): ?>
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="point" type="checkbox" disabled>
                        <label class="custom-control-label" for="point">Khóa Điểm</label>
                </div>
                <?php endif; ?>
                <?php if(!empty($dataProtect->password)): ?>
                <form class="form-group">
                        <input type="text" placeholder="Nhập mật khẩu..."  class="form-control" >
                </form>
                <?php endif; ?>
            </div>
            </div>
          </div>

        </div>

      </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/chenjinguyen/Websever/techviews/resources/views/post/view.blade.php ENDPATH**/ ?>
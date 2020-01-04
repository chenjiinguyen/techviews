<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small><?php echo e(__('Đăng nhập bằng')); ?></small></div>
                        <div class="btn-wrapper text-center">
                            <a href="<?php echo e(url('login/facebook')); ?>" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="<?php echo e(asset('argon')); ?>/img/icons/common/facebook.svg"></span>
                                <span class="btn-inner--text"><?php echo e(__('Facebook')); ?></span>
                            </a>
                        </div>
                    </div>
                    
                        
                            
                                
                            
                            
                            
                                
                                
                            
                        
                        
                            

                            
                                
                                    
                                        
                                    
                                    
                                
                                
                                    
                                        
                                    
                                
                            
                            
                                
                                    
                                        
                                    
                                    
                                
                                
                                    
                                        
                                    
                                
                            
                            
                                
                                
                                    
                                
                            
                            
                                
                            
                        
                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'bg-default'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/chenjinguyen/Websever/techviews/resources/views/auth/login.blade.php ENDPATH**/ ?>
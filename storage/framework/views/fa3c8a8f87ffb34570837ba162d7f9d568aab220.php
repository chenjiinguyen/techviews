<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">

        <title> <?php if (! empty(trim($__env->yieldContent('pageTitle')))): ?> <?php echo $__env->yieldContent('pageTitle'); ?> - <?php echo e(config('app.name', 'Tech Views Data'), false); ?> <?php else: ?><?php echo e(config('app.name', 'Tech Views Data'), false); ?><?php endif; ?></title>
        <link href="<?php echo e(asset('argon'), false); ?>/img/brand/favicon.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link type="text/css" href="<?php echo e(asset('css/app.css'), false); ?>?v=1.0.0" rel="stylesheet">
        <?php echo $__env->yieldPushContent("head"); ?>
    </head>
    <body class="<?php echo e($class ?? '', false); ?>">
        <?php if(auth()->guard()->check()): ?>
            <form id="logout-form" action="<?php echo e(route('logout'), false); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
            <?php echo $__env->make('layouts.navbars.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <div class="main-content">
            <?php echo $__env->make('layouts.navbars.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php if(auth()->guard()->guest()): ?>
            <?php echo $__env->make('layouts.footers.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <script src="<?php echo e(asset('argon'), false); ?>/vendor/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo e(asset('argon'), false); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <?php echo $__env->yieldPushContent('js'); ?>

        <!-- Argon JS -->
        <script src="<?php echo e(asset('argon'), false); ?>/js/argon.js?v=1.0.0"></script>

        <!-- Facebook -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=<?php echo e(env('FACEBOOK_KEY'), false); ?>&autoLogAppEvents=1"></script>
    </body>
</html>
<?php /**PATH /Users/chenjinguyen/Websever/techviews/resources/views/layouts/app.blade.php ENDPATH**/ ?>
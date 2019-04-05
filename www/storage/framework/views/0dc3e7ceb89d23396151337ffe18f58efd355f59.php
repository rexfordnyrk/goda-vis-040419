<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo e(asset('assets/img/basic/favicon.ico')); ?>" type="image/x-icon">
        <title>MTN Executive Breakfast Meeting | <?php echo $__env->yieldContent('page_title'); ?></title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
    </head>
    
    <body class="light">
        <div id="app">
            <?php if(session('status')): ?>
                <div class="alert alert-error">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            
            <?php echo $__env->yieldContent('content'); ?>
            
        </div>
    </body>
    
</html>
<?php /* /home/ignis/public_html/stream/resources/views/layouts/basic.blade.php */ ?>
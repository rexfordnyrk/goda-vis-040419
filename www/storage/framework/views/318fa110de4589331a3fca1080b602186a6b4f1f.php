<?php $__env->startSection('page_title'); ?>
    Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
    <div id="primary" class="p-t-b-100 height-full bg-yellow">
        <div class="container bg-yellow">
            <div class="row">
                <div class="col-lg-4 mx-md-auto paper-card">
                    <div class="text-center">
                        <!--replace with company logo -->
                        <img src="assets/pages/img/basic/logo.png" alt="">
                        
                        <p class="p-t-b-20">Kindly provide your unique passcode to continue.</p>
                    </div>
                    <form method="post" action="<?php echo e(route('authenticate')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group has-icon"><i class="icon-lock"></i>
                            <input type="password" class="form-control form-control-lg <?php echo e($errors->has('passcode') ? ' is-invalid' : ''); ?>" name="passcode" required
                                   placeholder="passcode" >

                            <?php if($errors->has('passcode')): ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('passcode')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>

                        <input type="submit" class="btn btn-primary btn-lg btn-block bg-yellow bolder" value="Give me access">

                        <p class="forget-pass ">
                            <a href="<?php echo e(route('password.request')); ?>">Forgot your passcode?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/ignis/public_html/stream/resources/views/auth/login.blade.php */ ?>
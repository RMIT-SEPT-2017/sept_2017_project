<!doctype html>
<html>
    <head>
        <?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </head>
        <body>
            
            
            
<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <h2>Register</h2>
        </div>
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input placeholder="Name" id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus><br>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            

                            <div class="col-md-6">
                                <input placeholder="E-Mail Address" id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required><br>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">

                            <div class="col-md-6">
                                <input placeholder="Address" id="address" type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>" required><br>

                                <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group<?php echo e($errors->has('suburb') ? ' has-error' : ''); ?>">

                            <div class="col-md-6">
                                <input placeholder="Suburb" id="suburb" type="text" class="form-control" name="suburb" value="<?php echo e(old('suburb')); ?>" required><br>

                                <?php if($errors->has('suburb')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('suburb')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group<?php echo e($errors->has('post_code') ? ' has-error' : ''); ?>">

                            <div class="col-md-6">
                                <input placeholder="Post Code" id="post_code" type="text" class="form-control" name="post_code" value="<?php echo e(old('post_code')); ?>" required><br>

                                <?php if($errors->has('post_code')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('post_code')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                            <div class="col-md-6">
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required><br>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6">
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary"
                                    value="Register">
                                <a href="<?php echo e(url('/login')); ?>"><input type="change" value="Already have an account?">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

<?php echo $__env->make('layouts.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!doctype html>
<html>
<head>
<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>
<body>
<?php echo $__env->make('layouts.navAdmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <a>Welcome</a>
            <h2>Add Employee</h2>
        </div>
            <form method="POST" action="<?php echo e(action('EmployeeController@updateEmployees')); ?>">
            <input placeholder="Full Name" name="name" type="text">
            <input placeholder="email" name="email" type="text">
                <div class="sub">
                    <input type="submit" value="Submit"></a>

                </div>
            </form>
    </div>
</div>

<?php echo $__env->make('layouts.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



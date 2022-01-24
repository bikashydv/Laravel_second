<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <p><strong> opp something went wrong</strong></p>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('login.submit')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for ="inputEmail">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">sign in</button>
</form>
<?php /**PATH /opt/lampp/htdocs/secondhandbazar/resources/views/login.blade.php ENDPATH**/ ?>
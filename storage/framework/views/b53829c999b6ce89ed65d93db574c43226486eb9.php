<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="navbar-nav ml-auto">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                   JQuiz
                </a>
            </div>
            <div class="navbar-nav ml-auto" style="
            float:right;">
                <a href="<?php echo e(route('auth.login')); ?>" class="btn btn-links" style="color:aliceblue">Login</a>
                <a href="<?php echo e(route('auth.register')); ?>" class="btn btn-links" style="color:aliceblue">Register</a>
            </div>
        </div>
    </nav>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome! Here are some numbers about LaraQuiz.</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h1><?php echo e($questions); ?></h1>
                            questions in our database
                        </div>
                        <div class="col-md-3 text-center">
                            <h1><?php echo e($users); ?></h1>
                            users registered
                        </div>
                        <div class="col-md-3 text-center">
                            <h1><?php echo e($quizzes); ?></h1>
                            quizzes taken
                        </div>
                        <div class="col-md-3 text-center">
                            <h1><?php echo e(number_format($average, 2)); ?> / 10</h1>
                            average score
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo e(route('tests.index')); ?>" class="btn btn-success">Take a new quiz!</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
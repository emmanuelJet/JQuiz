<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.laravel-quiz'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['tests.store']]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.quiz'); ?>
        </div>
        <?php //dd($questions) ?>
    <?php if(count($questions) > 0): ?>
        <div class="panel-body">
        <?php $i = 1; ?>
        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($i > 1): ?> <hr /> <?php endif; ?>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <div class="form-group">
                        <strong>Question <?php echo e($i); ?>.<br /><?php echo nl2br($question->question_text); ?></strong>

                        <?php if($question->code_snippet != ''): ?>
                            <div class="code_snippet"><?php echo $question->code_snippet; ?></div>
                        <?php endif; ?>

                        <input
                            type="hidden"
                            name="questions[<?php echo e($i); ?>]"
                            value="<?php echo e($question->id); ?>">
                    <?php $__currentLoopData = $question->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <br>
                        <label class="radio-inline">
                            <input
                                type="radio"
                                name="answers[<?php echo e($question->id); ?>]"
                                value="<?php echo e($option->id); ?>">
                            <?php echo e($option->option); ?>

                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        <?php $i++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
    </div>

    <?php echo Form::submit(trans('quickadmin.submit_quiz'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##
    <script src="<?php echo e(url('quickadmin/js')); ?>/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "<?php echo e(config('app.date_format_js')); ?>",
            timeFormat: "hh:mm:ss"
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
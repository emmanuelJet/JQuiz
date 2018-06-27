<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.questions-options.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['questions_options.store']]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('.create'); ?>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('question_id', 'question*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('question_id', $questions, old('question_id'), ['class' => 'form-control']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('question_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('question_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('option', 'Option*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('option', old('option'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('option')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('option')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('correct', 'Correct', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('correct', 0); ?>

                    <?php echo Form::checkbox('correct', 1, 0, ['class' => 'form-control']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('correct')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('correct')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>

    <?php echo Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
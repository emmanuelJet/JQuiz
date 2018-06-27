<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.questions.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['questions.store']]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.create'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('topic_id', 'Topic*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('topic_id', $topics, old('topic_id'), ['class' => 'form-control']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('topic_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('topic_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('question_text', 'Question text*', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('question_text', old('question_text'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('question_text')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('question_text')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('option1', 'Option #1', ['class' => 'control-label']); ?>

                    <?php echo Form::text('option1', old('option1'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('option1')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('option1')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('option2', 'Option #2', ['class' => 'control-label']); ?>

                    <?php echo Form::text('option2', old('option2'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('option2')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('option2')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('option3', 'Option #3', ['class' => 'control-label']); ?>

                    <?php echo Form::text('option3', old('option3'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('option3')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('option3')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('option4', 'Option #4', ['class' => 'control-label']); ?>

                    <?php echo Form::text('option4', old('option4'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('option4')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('option4')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('option5', 'Option #5', ['class' => 'control-label']); ?>

                    <?php echo Form::text('option5', old('option5'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('option5')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('option5')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('correct', 'Correct', ['class' => 'control-label']); ?>

                    <?php echo Form::select('correct', $correct_options, old('correct'), ['class' => 'form-control']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('correct')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('correct')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('code_snippet', 'Code snippet', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('code_snippet', old('code_snippet'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('code_snippet')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('code_snippet')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('answer_explanation', 'Answer explanation*', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('answer_explanation', old('answer_explanation'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('answer_explanation')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('answer_explanation')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('more_info_link', 'More info link', ['class' => 'control-label']); ?>

                    <?php echo Form::text('more_info_link', old('more_info_link'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('more_info_link')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('more_info_link')); ?>

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
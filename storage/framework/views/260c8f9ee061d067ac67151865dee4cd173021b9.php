<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.results.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.view-result'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <?php if(Auth::user()->isAdmin()): ?>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.results.fields.user'); ?></th>
                            <td><?php echo e(isset($test->user->name) ? $test->user->name : ''); ?> (<?php echo e(isset($test->user->email) ? $test->user->email : ''); ?>)</td>
                        </tr>
                        <?php endif; ?>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.results.fields.date'); ?></th>
                            <td><?php echo e(isset($test->created_at) ? $test->created_at : ''); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.results.fields.result'); ?></th>
                            <td><?php echo e($test->result); ?>/10</td>
                        </tr>
                    </table>
                <?php $i = 1 ?>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <table class="table table-bordered table-striped">
                        <tr class="test-option<?php echo e($result->correct ? '-true' : '-false'); ?>">
                            <th style="width: 10%">Question #<?php echo e($i); ?></th>
                            <th><?php echo e(isset($result->question->question_text) ? $result->question->question_text : ''); ?></th>
                        </tr>
                        <?php if($result->question->code_snippet != ''): ?>
                            <tr>
                                <td>Code snippet</td>
                                <td><div class="code_snippet"><?php echo $result->question->code_snippet; ?></div></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <td>Options</td>
                            <td>
                                <ul>
                                <?php $__currentLoopData = $result->question->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li style="<?php if($option->correct == 1): ?> font-weight: bold; <?php endif; ?>
                                        <?php if($result->option_id == $option->id): ?> text-decoration: underline <?php endif; ?>"><?php echo e($option->option); ?>

                                        <?php if($option->correct == 1): ?> <em>(correct answer)</em> <?php endif; ?>
                                        <?php if($result->option_id == $option->id): ?> <em>(your answer)</em> <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Answer Explanation</td>
                            <td>
                            <?php echo $result->question->answer_explanation; ?>

                                <?php if($result->question->more_info_link != ''): ?>
                                    <br>
                                    <br>
                                    Read more:
                                    <a href="<?php echo e($result->question->more_info_link); ?>" target="_blank"><?php echo e($result->question->more_info_link); ?></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                <?php $i++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('tests.index')); ?>" class="btn btn-default">Take another quiz</a>
            <a href="<?php echo e(route('results.index')); ?>" class="btn btn-default">See all my results</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.results.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.list'); ?>
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped <?php echo e(count($results) > 0 ? 'datatable' : ''); ?>">
                <thead>
                    <tr>
                    <?php if(Auth::user()->isAdmin()): ?>
                        <th><?php echo app('translator')->getFromJson('quickadmin.results.fields.user'); ?></th>
                    <?php endif; ?>
                        <th><?php echo app('translator')->getFromJson('quickadmin.results.fields.date'); ?></th>
                        <th>Result</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if(count($results) > 0): ?>
                        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <?php if(Auth::user()->isAdmin()): ?>
                                <td><?php echo e(isset($result->user->name) ? $result->user->name : ''); ?> (<?php echo e(isset($result->user->email) ? $result->user->email : ''); ?>)</td>
                            <?php endif; ?>
                                <td><?php echo e(isset($result->created_at) ? $result->created_at : ''); ?></td>
                                <td><?php echo e($result->result); ?>/10</td>
                                <td>
                                    <a href="<?php echo e(route('results.show',[$result->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.view'); ?></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6"><?php echo app('translator')->getFromJson('quickadmin.no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
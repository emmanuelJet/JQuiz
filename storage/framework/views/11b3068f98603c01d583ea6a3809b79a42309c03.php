<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.user-actions.title'); ?></h3>

    <p>
        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.list'); ?>
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped <?php echo e(count($user_actions) > 0 ? 'datatable' : ''); ?> ">
                <thead>
                    <tr>
                        
                        <th><?php echo app('translator')->getFromJson('quickadmin.user-actions.fields.user'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.user-actions.fields.action'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.user-actions.fields.action-model'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.user-actions.fields.action-id'); ?></th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($user_actions) > 0): ?>
                        <?php $__currentLoopData = $user_actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($user_action->id); ?>">
                                
                                <td><?php echo e(isset($user_action->user->name) ? $user_action->user->name : ''); ?></td>
                                <td><?php echo e($user_action->action); ?></td>
                                <td><?php echo e($user_action->action_model); ?></td>
                                <td><?php echo e($user_action->action_id); ?></td>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4"><?php echo app('translator')->getFromJson('quickadmin.no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
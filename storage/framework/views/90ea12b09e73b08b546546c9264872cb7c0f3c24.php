<?php $request = app('Illuminate\Http\Request'); ?>
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            
            <li style="text-align:center">
                <a style="cursor:default; ">
                    <i class="fa fa-user" style="margin-top:50px;font-size:100px"></i><br>
                    <span class="title"><?php echo e(Auth::user()->name); ?></span><br>
                    <span class="title"><?php echo e(Auth::user()->email); ?></span>
                </a>
            </li>

            <li class="<?php echo e($request->segment(1) == 'tests' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('tests.index')); ?>">
                    <i class="fa fa-gears"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.test.new'); ?></span>
                </a>
            </li>

            <li class="<?php echo e($request->segment(1) == 'results' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('results.index')); ?>">
                    <i class="fa fa-gears"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.results.title'); ?></span>
                </a>
            </li>

            <?php if(Auth::user()->isAdmin()): ?>
            <li class="<?php echo e($request->segment(1) == 'topics' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('topics.index')); ?>">
                    <i class="fa fa-book"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.topics.title'); ?></span>
                </a>
            </li>
            <li class="<?php echo e($request->segment(1) == 'questions' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('questions.index')); ?>">
                    <i class="fa fa-database"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.questions.title'); ?></span>
                </a>
            </li>
            <li class="<?php echo e($request->segment(1) == 'questions_options' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('questions_options.index')); ?>">
                    <i class="fa fa-check"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.questions-options.title'); ?></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.user-management.title'); ?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?php echo e($request->segment(1) == 'roles' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('roles.index')); ?>">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.roles.title'); ?>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo e($request->segment(1) == 'users' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('users.index')); ?>">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.users.title'); ?>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo e($request->segment(1) == 'user_actions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('user_actions.index')); ?>">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.user-actions.title'); ?>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.logout'); ?></span>
                </a>
            </li>
        </ul>

    </div>
</div>
<?php echo Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']); ?>

<button type="submit"><?php echo app('translator')->getFromJson('quickadmin.logout'); ?></button>
<?php echo Form::close(); ?>


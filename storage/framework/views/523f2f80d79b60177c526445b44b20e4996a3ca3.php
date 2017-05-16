<?php $__env->startSection('page'); ?>
    <?php echo e(trans('ticketit::admin.agent-index-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('ticketit::shared.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2><?php echo e(trans('ticketit::admin.agent-index-title')); ?>

                <?php echo link_to_route(
                                    $setting->grab('admin_route').'.agent.create',
                                    trans('ticketit::admin.btn-create-new-agent'), null,
                                    ['class' => 'btn btn-primary pull-right']); ?>

            </h2>
        </div>

        <?php if($agents->isEmpty()): ?>
            <h3 class="text-center"><?php echo e(trans('ticketit::admin.agent-index-no-agents')); ?>

                <?php echo link_to_route($setting->grab('admin_route').'.agent.create', trans('ticketit::admin.agent-index-create-new')); ?>

            </h3>
        <?php else: ?>
            <div id="message"></div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td><?php echo e(trans('ticketit::admin.table-id')); ?></td>
                        <td><?php echo e(trans('ticketit::admin.table-name')); ?></td>
                        <td><?php echo e(trans('ticketit::admin.table-categories')); ?></td>
                        <td><?php echo e(trans('ticketit::admin.table-join-category')); ?></td>
                        <td><?php echo e(trans('ticketit::admin.table-remove-agent')); ?></td>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($agent->id); ?>

                        </td>
                        <td>
                            <?php echo e($agent->name); ?>

                        </td>
                        <td>
                            <?php $__currentLoopData = $agent->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span style="color: <?php echo e($category->color); ?>">
                                    <?php echo e($category->name); ?>

                                </span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                            <?php echo CollectiveForm::open([
                                            'method' => 'PATCH',
                                            'route' => [
                                                        $setting->grab('admin_route').'.agent.update',
                                                        $agent->id
                                                        ],
                                            ]); ?>

                            <?php $__currentLoopData = \Kordy\Ticketit\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input name="agent_cats[]"
                                       type="checkbox"
                                       value="<?php echo e($agent_cat->id); ?>"
                                       <?php echo ($agent_cat->agents()->where("id", $agent->id)->count() > 0) ? "checked" : ""; ?>

                                       > <?php echo e($agent_cat->name); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php echo CollectiveForm::submit(trans('ticketit::admin.btn-join'), ['class' => 'btn btn-info btn-sm']); ?>

                            <?php echo CollectiveForm::close(); ?>

                        </td>
                        <td>
                            <?php echo CollectiveForm::open([
                            'method' => 'DELETE',
                            'route' => [
                                        $setting->grab('admin_route').'.agent.destroy',
                                        $agent->id
                                        ],
                            'id' => "delete-$agent->id"
                            ]); ?>

                            <?php echo CollectiveForm::submit(trans('ticketit::admin.btn-remove'), ['class' => 'btn btn-danger']); ?>

                            <?php echo CollectiveForm::close(); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($master, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('page', trans('ticketit::lang.create-ticket-title')); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('ticketit::shared.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="well bs-component">
        <?php echo CollectiveForm::open([
                        'route'=>$setting->grab('main_route').'.store',
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                        ]); ?>

            <legend><?php echo trans('ticketit::lang.create-new-ticket'); ?></legend>
            <div class="form-group">
                <?php echo CollectiveForm::label('subject', trans('ticketit::lang.subject') . trans('ticketit::lang.colon'), ['class' => 'col-lg-2 control-label']); ?>

                <div class="col-lg-10">
                    <?php echo CollectiveForm::text('subject', null, ['class' => 'form-control', 'required' => 'required']); ?>

                    <span class="help-block"><?php echo trans('ticketit::lang.create-ticket-brief-issue'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <?php echo CollectiveForm::label('content', trans('ticketit::lang.description') . trans('ticketit::lang.colon'), ['class' => 'col-lg-2 control-label']); ?>

                <div class="col-lg-10">
                    <?php echo CollectiveForm::textarea('content', null, ['class' => 'form-control summernote-editor', 'rows' => '5', 'required' => 'required']); ?>

                    <span class="help-block"><?php echo trans('ticketit::lang.create-ticket-describe-issue'); ?></span>
                </div>
            </div>
            <div class="form-inline row">
                <div class="form-group col-lg-4">
                    <?php echo CollectiveForm::label('priority', trans('ticketit::lang.priority') . trans('ticketit::lang.colon'), ['class' => 'col-lg-6 control-label']); ?>

                    <div class="col-lg-6">
                        <?php echo CollectiveForm::select('priority_id', $priorities, null, ['class' => 'form-control', 'required' => 'required']); ?>

                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <?php echo CollectiveForm::label('category', trans('ticketit::lang.category') . trans('ticketit::lang.colon'), ['class' => 'col-lg-6 control-label']); ?>

                    <div class="col-lg-6">
                        <?php echo CollectiveForm::select('category_id', $categories, null, ['class' => 'form-control', 'required' => 'required']); ?>

                    </div>
                </div>
                <?php echo CollectiveForm::hidden('agent_id', 'auto'); ?>

            </div>
            <br>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <?php echo link_to_route($setting->grab('main_route').'.index', trans('ticketit::lang.btn-back'), null, ['class' => 'btn btn-default']); ?>

                    <?php echo CollectiveForm::submit(trans('ticketit::lang.btn-submit'), ['class' => 'btn btn-primary']); ?>

                </div>
            </div>
        <?php echo CollectiveForm::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('ticketit::tickets.partials.summernote', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->appendSection(); ?>
<?php echo $__env->make($master, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
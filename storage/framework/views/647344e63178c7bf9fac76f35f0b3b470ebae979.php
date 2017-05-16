<?php if(!$comments->isEmpty()): ?>
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="panel <?php echo $comment->user->tickets_role ? "panel-info" : "panel-default"; ?>">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $comment->user->name; ?>

                    <span class="pull-right"> <?php echo $comment->created_at->diffForHumans(); ?> </span>
                </h3>
            </div>
            <div class="panel-body">
                <div class="content">
                    <p> <?php echo $comment->html; ?> </p>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->startPush('libraries_top'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e($pageTitle); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/"><?php echo e(trans('admin/main.dashboard')); ?></a>
                </div>
                <div class="breadcrumb-item"><?php echo e($pageTitle); ?></div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_store_specifications_create')): ?>
                                <a href="/admin/store/specifications/create" class="btn btn-primary"><?php echo e(trans('admin/main.add_new')); ?></a>
                            <?php endif; ?>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14">
                                    <tr>
                                        <th class="text-left"><?php echo e(trans('admin/main.title')); ?></th>
                                        <th><?php echo e(trans('admin/main.type')); ?></th>
                                        <th><?php echo e(trans('admin/main.categories')); ?></th>
                                        <th><?php echo e(trans('admin/main.action')); ?></th>
                                    </tr>
                                    <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td class="text-left"><?php echo e($specification->title); ?></td>
                                            <td><?php echo e(trans('update.'.$specification->input_type)); ?></td>
                                            <td><?php echo e($specification->categories_count); ?></td>
                                            <td>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_store_specifications_edit')): ?>
                                                    <a href="/admin/store/specifications/<?php echo e($specification->id); ?>/edit"
                                                       class="btn-transparent btn-sm text-primary">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_store_specifications_delete')): ?>
                                                    <?php echo $__env->make('admin.includes.delete_button',['url' => '/admin/store/specifications/'.$specification->id.'/delete'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <?php echo e($specifications->appends(request()->input())->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PHP\rocketlms\resources\views/admin/store/specifications/lists.blade.php ENDPATH**/ ?>
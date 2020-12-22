

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                    <form action="<?php echo e(route('KartuKeluarga.update', $kartukeluargas->id)); ?>" method="POST">
                    <?php echo e(@csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                        
                        <div class="card-header">
                            <strong><i class="cil-pencil"></i> Edit Data Kartu Keluarga</strong>
                        </div>

                        
                        <div class="card-body">
                            <?php echo $__env->make('Kartu_keluarga._form_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_pdb\resources\views/Kartu_keluarga/edit.blade.php ENDPATH**/ ?>
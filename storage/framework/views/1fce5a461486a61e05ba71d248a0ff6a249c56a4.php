

<?php $__env->startSection('content'); ?>

<div class="card">
        <div class="card-header">
            <strong>Laporan Berdasarkan Nagari</strong>
        </div>
        <div class="card-body">
        <form action="<?php echo e(route('Laporan.searchN')); ?>" method="POST">
            <div class="form-group">
                <label>Nagari :</label>
                <?php echo Form::select('id', $nagaris, NULL, ['class' => "form-control"]); ?>

                <?php if($errors->has('id')): ?>
                    <span class="text-danger"><?php echo e($errors->first('id')); ?></span>
                <?php endif; ?>
            </div>
        
        </div>
            
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Cari" />
        </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_pdb\resources\views/Laporan/nagari.blade.php ENDPATH**/ ?>
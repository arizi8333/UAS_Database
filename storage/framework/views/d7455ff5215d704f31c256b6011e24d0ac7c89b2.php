

<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('Penduduk.store')); ?>">
<?php echo csrf_field(); ?>
    <div class="card">
        <div class="card-header">
            <strong> <i class="cil-plus"></i> Tambah Data Penduduk</strong>
        </div>

        <div class="card-body">

        <?php echo $__env->make('Penduduk._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_pdb\resources\views/Penduduk/create.blade.php ENDPATH**/ ?>
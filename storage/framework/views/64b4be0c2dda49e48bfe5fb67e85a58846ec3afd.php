
<?php $__env->startSection('content'); ?>

<div class="row justify-content-center">
        <div class="col">
            <div class="card">

                <div class="card-header">
                    <strong><i class="cil-zoom"></i> Detail Informasi Penduduk</strong>
                </div>

                
                <div class="card-body">
                    <?php echo $__env->make('Penduduk._detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                
                <div class="card-footer">
                </div>

            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_pdb\resources\views/Penduduk/show.blade.php ENDPATH**/ ?>
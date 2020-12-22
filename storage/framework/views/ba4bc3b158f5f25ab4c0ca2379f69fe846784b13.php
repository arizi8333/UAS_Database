

<?php $__env->startSection('content'); ?>
<div class="card">
        <div class="card-header">
            <strong>List Data Keluarga</strong>
                <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('KartuKeluarga.create')); ?>"><i class="bi bi-plus">Tambah Kartu Keluarga</i></a>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>No Kartu Keluarga</th>
                    <th>Tanggal Pencatatan</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $kartukeluargas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kartukeluarga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td>
                            <?php echo e($kartukeluarga->no); ?>

                        </td>
                        <td>
                            <?php echo e($kartukeluarga->tanggal_pencatatan); ?>

                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('KartuKeluarga.edit',$kartukeluarga->id)); ?>">Edit</a>
                            <a class="btn btn-secondary btn-sm" href="<?php echo e(route('KartuKeluarga.show',$kartukeluarga->id)); ?>">More</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5">Belum ada data penduduk</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_pdb\resources\views/Kartu_keluarga/index.blade.php ENDPATH**/ ?>
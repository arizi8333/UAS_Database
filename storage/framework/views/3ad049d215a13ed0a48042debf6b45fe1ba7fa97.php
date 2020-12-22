

<?php $__env->startSection('content'); ?>
<div class="card">
        <div class="card-header">
            <strong>List Data Penduduk</strong>
                <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('Penduduk.create')); ?>"><i class="bi bi-plus">Tambah Penduduk</i></a>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Nama Penduduk</th>
                    <th>NIK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $penduduks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td>
                            <?php echo e($penduduk->nama); ?>

                        </td>
                        <td>
                            <?php echo e($penduduk->nik); ?>

                        </td>
                        <td>
                            <?php echo e($penduduk->tempat_lahir); ?>

                        </td>
                        <td>
                            <?php echo e($penduduk->tanggal_lahir); ?>

                        </td>
                        <td>
                            <form action="<?php echo e(route('Penduduk.destroy', $penduduk->id)); ?>" method="POST">
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('Penduduk.show',$penduduk->id)); ?>">Show</a>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('Penduduk.edit',$penduduk->id)); ?>">Edit</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
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
<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_pdb\resources\views/Penduduk/index.blade.php ENDPATH**/ ?>
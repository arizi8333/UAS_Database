<div class="form-group">
                <label>Nama Jorong:</label>
                <?php echo Form::select('jorong_id', $jorongs, NULL, ['class' => "form-control"]); ?>

                <?php if($errors->has('jorong_id')): ?>
                    <span class="text-danger"><?php echo e($errors->first('jorong_id')); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <strong>No Kartu Keluarga:</strong>
                <input type="text" name="no" class="form-control" placeholder="No" value="<?php echo e($kartukeluargas->no); ?>">
                <?php if($errors->has('no')): ?>
                    <span class="text-danger"><?php echo e($errors->first('no')); ?></span>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <strong>Tanggal Pencatatan:</strong>
                <input type="date" name="tanggal_pencatatan" class="form-control" placeholder="Tanggal Pencatatan" value="<?php echo e($kartukeluargas->no); ?>>
                <?php if($errors->has('tanggal_pencatatan')): ?>
                    <span class="text-danger"><?php echo e($errors->first('tanggal_pencatatan')); ?></span>
                <?php endif; ?>
            </div><?php /**PATH C:\xampp\htdocs\uas_pdb\resources\views/Kartu_keluarga/_form_edit.blade.php ENDPATH**/ ?>
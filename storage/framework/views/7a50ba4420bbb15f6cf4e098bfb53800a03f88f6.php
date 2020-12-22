<div class="form-group">
            <div class="form-group">
                <label>Nama Penduduk:</label>
                <input type="nama" name="nama" class="form-control" placeholder="Nama" value="<?php echo e($penduduks->nama); ?>">
                <?php if($errors->has('nama')): ?>
                    <span class="text-danger"><?php echo e($errors->first('nama')); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <strong>Tempat Lahir:</strong>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo e($penduduks->tempat_lahir); ?>">
                <?php if($errors->has('tempat_lahir')): ?>
                    <span class="text-danger"><?php echo e($errors->first('tempat_lahir')); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo e($penduduks->tanggal_lahir); ?>">
                <?php if($errors->has('tanggal_lahir')): ?>
                    <span class="text-danger"><?php echo e($errors->first('tanggal_lahir')); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <strong>Agama:</strong>
                <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?php echo e($penduduks->agama); ?>">
                <?php if($errors->has('agama')): ?>
                    <span class="text-danger"><?php echo e($errors->first('agama')); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <select type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value="<?php echo e($penduduks->jenis_kelamin); ?>">
                    <option value="Pria">Pria</option>
                    <option value="Perempuan">Perempuan</option>
                <?php if($errors->has('jenis_kelamin')): ?>
                    <span class="text-danger"><?php echo e($errors->first('jenis_kelamin')); ?></span>
                <?php endif; ?>
                </select>
            </div>

            <div class="form-group">
                <strong>Status Pernikahan:</strong>
                <select type="text" name="status_pernikahan" class="form-control" placeholder="Status Pernikahan" value="<?php echo e($penduduks->status_pernikahan); ?>">
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="janda/duda">Janda / Duda</option>
                <?php if($errors->has('status_pernikahan')): ?>
                    <span class="text-danger"><?php echo e($errors->first('status_pernikahan')); ?></span>
                <?php endif; ?>
                </select>
            </div>

            <div class="form-group">
                <strong>Status Keluarga:</strong>
                <select type="text" name="status_keluarga" class="form-control" placeholder="Status Keluarga" value="<?php echo e($penduduks->status_pernikahan); ?>">
                    <option value="Ayah">Ayah</option>
                    <option value="Ibu">Ibu</option>
                    <option value="Anak">Anak</option>
                    <option value="Orang Tua">Orang Tua</option>
                <?php if($errors->has('status_keluarga')): ?>
                    <span class="text-danger"><?php echo e($errors->first('status_keluarga')); ?></span>
                <?php endif; ?>
                </select>
            </div>

            <div class="form-group">
                <strong>Nama Ibu:</strong>
                <input type="text" name="ibu" class="form-control" placeholder="Ibu" value="<?php echo e($penduduks->ibu); ?>">
                <?php if($errors->has('ibu')): ?>
                    <span class="text-danger"><?php echo e($errors->first('ibu')); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <strong>Nama Ayah:</strong>
                <input type="text" name="ayah" class="form-control" placeholder="Ayah" value="<?php echo e($penduduks->ayah); ?>">
                <?php if($errors->has('ayah')): ?>
                    <span class="text-danger"><?php echo e($errors->first('ayah')); ?></span>
                <?php endif; ?>
            </div>
</div><?php /**PATH C:\xampp\htdocs\uas_pdb\resources\views/Penduduk/_form_edit.blade.php ENDPATH**/ ?>
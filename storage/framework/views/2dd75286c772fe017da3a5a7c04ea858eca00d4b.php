<div id="sidenav">
  <a href="<?php echo e(route('Penduduk.index')); ?>"><b>Data Penduduk</b></a>
  <a href="<?php echo e(route('KartuKeluarga.index')); ?>"><b>Data Kartu Keluarga</b></a>
    <a class="nav-link dropdown-toggle" data-toggle="dropdown"><b>Laporan</b></a>
    <div class="dropdown-menu" style="background-color : #111">
      <a class="dropdown" href="<?php echo e(route('Laporan.umur')); ?>">Berdasarkan Umur</a>
      <a class="dropdown" href="<?php echo e(route('Laporan.nagari')); ?>">Berdasarkan Nagari</a>
      <a class="dropdown" href="<?php echo e(route('Laporan.pendidikan')); ?>">Berdasarkan Pendidikan</a>
    </div>
</div><?php /**PATH C:\xampp\htdocs\uas_pdb\resources\views/Layout/Partials/sidebar.blade.php ENDPATH**/ ?>
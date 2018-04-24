<?php $__env->startSection('content'); ?>
<h4 style="display: inline-block">Curriculum vitae</h4>

<div class="row">
  <div class="col-md-12">
    <div class="col-md-3 col-xs-12">
      <img src="/img/foto/<?php echo e($biodata->foto); ?>" class="foto-profil" alt="">
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Nama</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        <?php echo e($biodata->nama); ?>

      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Tempat Lahir</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        <?php echo e($biodata->tempat_lahir); ?>

      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Tanggal Lahir</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        <?php echo e($biodata->tanggal_lahir); ?>

      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">No. Telepon</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        <?php echo e($biodata->telepon); ?>

      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Website</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        <?php echo e($biodata->website); ?>

      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Alamat</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        <?php echo e($biodata->alamat); ?>

      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Pendidikan</label>
    </div>
    <div class="col-md-9 col-print-9">
      <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="data">
          [<?php echo e($value->tahun); ?>] <?php echo e($value->keterangan); ?>

        </p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Pengalaman</label>
    </div>
    <div class="col-md-9 col-print-9">
      <?php $__currentLoopData = $pengalaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="data">
          [<?php echo e($value->tahun); ?>] <?php echo e($value->keterangan); ?>

        </p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('button'); ?>
  <a href="#" class="btn btn-info" style="float: right;" onclick="window.print()">Cetak</a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
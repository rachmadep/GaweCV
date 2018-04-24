<?php $__env->startSection('content'); ?>
<h4>Edit Biodata</h4>
<form action="/biodata/update/<?php echo e($biodata->id); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>


    <div class="form-group <?php echo e($errors->has('nama') ? 'has-error' : ''); ?>">
      <label for="nama" class="col-md-3 col-xs-12 control-label">Nama</label>
      <div class="col-md-9 col-xs-12 input-group">
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo e($biodata->nama); ?>">
        <?php if($errors->has('nama')): ?>
            <span class="help-block"><?php echo e($errors->first('nama')); ?></span>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group <?php echo e($errors->has('telepon') ? 'has-error' : ''); ?>">
      <label for="telepon" class="col-md-3 col-xs-12 control-label">No. Telepon</label>
      <div class="col-md-9 col-xs-12 input-group">
        <input type="text" class="form-control" name="telepon" placeholder="No. Telepon" value="<?php echo e($biodata->telepon); ?>">
        <?php if($errors->has('telepon')): ?>
            <span class="help-block"><?php echo e($errors->first('telepon')); ?></span>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group <?php echo e($errors->has('tempat_lahir') ? 'has-error' : ''); ?>">
      <label for="tempat_lahir" class="col-md-3 col-xs-12 control-label">Tempat Lahir</label>
      <div class="col-md-9 col-xs-12 input-group">
        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo e($biodata->tempat_lahir); ?>">
        <?php if($errors->has('tempat_lahir')): ?>
            <span class="help-block"><?php echo e($errors->first('tempat_lahir')); ?></span>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group <?php echo e($errors->has('tanggal_lahir') ? 'has-error' : ''); ?>">
      <label for="tanggal_lahir" class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
      <div class="col-md-9 col-xs-12 input-group">
        <input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo e($biodata->tanggal_lahir); ?>">
        <?php if($errors->has('tanggal_lahir')): ?>
            <span class="help-block"><?php echo e($errors->first('tanggal_lahir')); ?></span>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group <?php echo e($errors->has('foto') ? 'has-error' : ''); ?>">
      <label for="telepon" class="col-md-3 control-label">Foto</label>
      <div class="col-md-9  input-group">
        <?php if(is_null($biodata->foto)): ?>
          <div class="fileinput fileinput-new" data-provides="fileinput">
        <?php else: ?>
          <div class="fileinput fileinput-exists" data-provides="fileinput">
        <?php endif; ?>
          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;">
            <?php if(is_null($biodata->foto)): ?>

            <?php else: ?>
              <img src="/img/foto/<?php echo e($biodata->foto); ?>" alt="">
            <?php endif; ?>
          </div>
          <div>
              <span class="btn btn-default btn-file">
                  <span class="fileinput-new">Select image</span>
                  <span class="fileinput-exists">Change</span>
                  <input type="hidden"><input type="file" name="foto" value=""></span>
              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
          </div>
          <?php if($errors->has('foto')): ?>
            <span class="help-block">
                <strong class="error"><?php echo e($errors->first('foto')); ?></strong>
            </span>
          <?php endif; ?>
      </div>
        </div>
      </div>

      <div class="form-group <?php echo e($errors->has('website') ? 'has-error' : ''); ?>">
        <label for="website" class="col-md-3 col-xs-12 control-label">Website</label>
        <div class="col-md-9 col-xs-12 input-group">
          <input type="text" class="form-control" name="website" placeholder="Website" value="<?php echo e($biodata->website); ?>">
          <?php if($errors->has('website')): ?>
              <span class="help-block"><?php echo e($errors->first('website')); ?></span>
          <?php endif; ?>
        </div>
      </div>

      <div class="form-group <?php echo e($errors->has('alamat') ? 'has-error' : ''); ?>">
        <label for="alamat" class="col-md-3 col-xs-12 control-label">Alamat</label>
        <div class="col-md-9 col-xs-12 input-group">
          <textarea name="alamat" rows="3" class="form-control" cols="80" placeholder="Alamat"><?php echo e($biodata->alamat); ?></textarea>
          
          <?php if($errors->has('alamat')): ?>
              <span class="help-block"><?php echo e($errors->first('alamat')); ?></span>
          <?php endif; ?>
        </div>
      </div>

      <div class="form-group">
        <label for="pendidikan" class="col-md-3 col-xs-12 control-label">Pendidikan</label>
        <div class="col-md-9 col-xs-12 input-group input_fields_wrap">
          <a class="btn btn-default add_field_button">Tambah kolom</a>
          <?php if(!isset($pendidikan)): ?>
            <textarea name="keterangan_pendidikan[]" rows="3" class="form-control" cols="80" placeholder="Pendidikan"></textarea>
            <input type="text" class="form-control" name="tahun_pendidikan[]" placeholder="Tahun">
          <?php else: ?>
            <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div>
                <div class="input-group2">
                  <textarea style="margin-top:15px;" name="keterangan_pendidikan[]" rows="2" class="form-control" cols="80" placeholder="Pendidikan"><?php echo e($value->keterangan); ?></textarea>
                </div>
                <input type="text" class="form-control" name="tahun_pendidikan[]" placeholder="Tahun" style="width:95%" value="<?php echo e($value->tahun); ?>">
                <span class="remove_field input-group-addon danger">
                  <span class="glyphicon glyphicon-remove"></span>
                </span>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="form-group">
        <label for="pengalaman" class="col-md-3 col-xs-12 control-label">Pengalaman Kerja</label>
        <div class="col-md-9 col-xs-12 input-group input_fields_wrap2">
          <a class="btn btn-default add_field_button2">Tambah kolom</a>
          <?php if(!isset($pengalaman)): ?>
            <textarea name="keterangan_pengalaman[]" rows="3" class="form-control" cols="80" placeholder="Pengalaman Kerja"></textarea>
            <input type="text" class="form-control" name="tahun_pengalaman[]" placeholder="Tahun">
          <?php else: ?>
            <?php $__currentLoopData = $pengalaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div>
                <div class="input-group2">
                  <textarea style="margin-top:15px;" name="keterangan_pengalaman[]" rows="2" class="form-control" cols="80" placeholder="Pengalaman"><?php echo e($value->keterangan); ?></textarea>
                </div>
                <input type="text" class="form-control" name="tahun_pengalaman[]" placeholder="Tahun" style="width:95%" value="<?php echo e($value->tahun); ?>">
                <span class="remove_field input-group-addon danger">
                  <span class="glyphicon glyphicon-remove"></span>
                </span>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      </div>


    </div>

    <div class="form-group" style="height: 30px;">
      <div class="col-md-6">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="" class="btn btn-default">Kembali</a>
      </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      var max_fields      = 10; //maximum input boxes allowed
      var wrapper         = $(".input_fields_wrap"); //Fields wrapper
      var add_button      = $(".add_field_button"); //Add button ID

      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
          e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append('<div><div class="input-group2"><textarea style="margin-top:15px;" name="keterangan_pendidikan[]" rows="2" class="form-control" cols="80" placeholder="Pendidikan"></textarea></div><input type="text" class="form-control" name="tahun_pendidikan[]" placeholder="Tahun" style="width:95%"><span class="remove_field input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span></div>'); //add input box
          }
      });

      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent('div').remove(); x--;
      })

      var wrapper2         = $(".input_fields_wrap2"); //Fields wrapper
      var add_button2      = $(".add_field_button2"); //Add button ID

      var x = 1; //initlal text box count
      $(add_button2).click(function(e){ //on add input button click
          e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper2).append('<div><div class="input-group2"><textarea style="margin-top:15px;" name="keterangan_pengalaman[]" rows="2" class="form-control" cols="80" placeholder="Pengalaman Kerja"></textarea></div><input type="text" class="form-control add" name="tahun_pengalaman[]" placeholder="Tahun" style="width:95%"><span class="remove_field input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span></div>'); //add input box
          }
      });

      $(wrapper2).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent('div').remove(); x--;
      })
    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
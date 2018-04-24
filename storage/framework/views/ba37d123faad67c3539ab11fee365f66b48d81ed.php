<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(URL::to('biodata/create')); ?>" class="btn btn-info btn-sm">Biodata Baru</a>

    <?php if($message = Session::get('message')): ?>
        <div class="alert alert-success martop-sm">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $biodatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $biodata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($biodata->id); ?></td>
                    <td><a href=""><?php echo e($biodata->nama); ?></a></td>
                    <td>
                        <form action="" method="post">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            <a href="/biodata/show/<?php echo e($biodata->id); ?>" class="btn btn-info btn-sm">Lihat</a>
                            <a href="/biodata/edit/<?php echo e($biodata->id); ?>" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
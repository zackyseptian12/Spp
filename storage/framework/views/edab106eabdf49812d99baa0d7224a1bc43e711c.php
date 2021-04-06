
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo e(route('tambahspp')); ?>" class="btn btn-success my-3">Tambah Spp</a>

    <table border="1" align="center">
        <tr>
            <td>ID SPP</td>
            <td>Tahun</td>
            <td>Nominal</td>
            <td>Action</td>
        </tr>
        <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($spp->id); ?></td>
          <td><?php echo e($spp->tahun); ?></td>
          <td><?php echo e($spp->nominal); ?></td>
          <td>
            <form action="<?php echo e(route('deletspp',$spp->id )); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-success my-3">delet</button>
                <a href="<?php echo e(route('editspp', $spp->id)); ?>" class="btn btn-danger my-3">Edit</a></td></form>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/spp/index.blade.php ENDPATH**/ ?>

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
    <a href="<?php echo e(route('createkelas')); ?>" class="btn btn-success my-3"> Tambah kelas</a>

    <table border="1" align="center">
        <tr>
            <td>ID kelas</td>
            <td>nama kelas</td>
            <td>Major</td>
            <td>Action</td>
        </tr>
        <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($kelas->id); ?></td>
                <td><?php echo e($kelas->nama_kelas); ?></td>
                <td><?php echo e($kelas->major); ?></td>
                <td>
                    <form action="<?php echo e(route('deletkelas', $kelas->id)); ?>" method="POST">
                        <a href="<?php echo e(route('editkelas',$kelas->id)); ?>" class="btn btn-primary">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                       <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/kelas/index.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo e(route('createpetugas')); ?>" class="btn btn-success my-3">Tambah Petugas</a>

    <table border="1" align="center">
        <div class="container">
        <tr>
             <td>ID_petugas</td>
             <td>Username</td>
             <td>Password</td>
             <td>Nama Petugas</td>
             <td>Level</td>
             <td>Action</td>
        </tr>
        <?php $__currentLoopData = $petugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $petugas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
             <td><?php echo e($petugas->id); ?></td>
             <td><?php echo e($petugas->username); ?></td>
             <td><?php echo e($petugas->password); ?></td>
             <td><?php echo e($petugas->nama_petugas); ?></td>
             <td><?php echo e($petugas->level); ?></td>
             <td>
                <form action="<?php echo e(route('deletepetugas', $petugas->id)); ?>" method="POST">
                <a href="<?php echo e(route('editpetugas', $petugas->id)); ?>" class="btn btn-primary">Edit</a>

                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
             </td>
         </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </table>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/petugas/index.blade.php ENDPATH**/ ?>
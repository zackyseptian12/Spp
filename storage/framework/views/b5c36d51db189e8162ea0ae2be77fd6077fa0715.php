
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
 
    <a href="<?php echo e(route('createsiswa')); ?>" class="btn btn-success my-3" >Tambah Siswa</a>

    <table border="1" align="center">
        
        <tr>
            <td>NISN</td>
            <td>NIS</td>
            <td>nama</td>
            <td>Id_kelas</td>
            <td>alamat</td>
            <td>no_hp</td>
            <td>id_spp</td>
            <td>Action</td>
        </tr>
        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($siswa->nisn); ?></td>
                <td><?php echo e($siswa->nis); ?></td>
                <td><?php echo e($siswa->nama); ?></td>
                <td><?php echo e($siswa->id_kelas); ?></td>
                <td><?php echo e($siswa->alamat); ?></td>
                <td><?php echo e($siswa->no_hp); ?></td>
                <td><?php echo e($siswa->id_spp); ?></td>
                <td>
                    <form action="<?php echo e(route('deletesiswa', $siswa->id)); ?>" method="POST">
                        <a href="<?php echo e(route('editsiswa',$siswa->id)); ?>" class="btn btn-primary">Edit</a>
                        <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">delete</button>

                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </table>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/siswa/index.blade.php ENDPATH**/ ?>

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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Edit Petugas')); ?></div>
    
                    <div class="card-body">
                        <form action="<?php echo e(route('updatepetugas', $petugas->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <a href="<?php echo e(route('indexpetugas')); ?>">Kembali</a><br>
                            
                            <label for="">Username</label>
                            <input type="text" name="username" value="<?php echo e($petugas->username); ?>"><br>
                            <label for="">Password</label>
                            <input type="text" name="password" value="<?php echo e($petugas->password); ?>"><br>
                            <label for="">Nama Petugas</label>
                            <input type="text" name="nama_petugas" value="<?php echo e($petugas->nama_petugas); ?>"><br>
                            <label for="">Level</label>
                            <!-- <input type="text" name="level"><br> -->
                            <select name="level" >
                             <option value="">Level</option>
                             <option value="admin">admin</option>
                             <option value="petugas">petugas</option>
                            </select>
                            <button type="submit">Simpan</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/petugas/edit.blade.php ENDPATH**/ ?>
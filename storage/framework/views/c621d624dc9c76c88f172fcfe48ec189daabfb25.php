



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
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Tambah Petugas')); ?></div>
    
                    <div class="card-body">
                        <form action="<?php echo e(route('storepetugas')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <a href="<?php echo e(route('indexpetugas')); ?>" class="btn btn-success">Kembali</a><br>
                            
                            <label for="">Username</label>
                            <input type="text" name="username"><br>
                            <label for="">Password</label>
                            <input type="text" name="password"><br>
                            <label for="">Nama Petugas</label>
                            <input type="text" name="nama_petugas"><br>
                            <label for="">Level</label>
                            <!-- <input type="text" name="level"><br> -->
                            <select name="level" >
                             <option value="">Level</option>
                             <option value="admin">admin</option>
                             <option value="petugas">petugas</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/petugas/create.blade.php ENDPATH**/ ?>
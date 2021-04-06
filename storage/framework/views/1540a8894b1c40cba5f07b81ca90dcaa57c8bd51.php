

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
                    <div class="card-header"><?php echo e(__('Tambah Siswa')); ?></div>
    
                    <div class="card-body">
                        <form action="<?php echo e(route('storesiswa')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                        
                            <a href="<?php echo e(route('indexsiswa')); ?>" class="btn btn-success">Kembali</a><br>
                                <label for="">nisn</label>
                            <input type="text" name="nisn"><br>
                            <label for="">nis</label>
                            <input type="text" name="nis"><br>
                            <label for="">nama</label>
                            <input type="text" name="nama"><br>
                            <label for="">id_kelas</label>
                            <!-- <input type="text" name="id_kelas"><br> -->
                            <select name="id_kelas">
                            <option value="">Kelas</option>
                            <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>"><?php echo e($kelas); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select><br>
                            <label for="">alamat</label>
                            <input type="text" name="alamat"><br>
                            <label for="">no_hp</label>
                            <input type="text" name="no_hp"><br>
                            <label for="">id_spp</label>
                            
                                <select name="id_spp" >
                                    <option value="">-- Spp --</option>
                                    <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $spp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($id); ?>"><?php echo e($spp); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select><br>
                            <button type="submit" class="btn btn-primary">simpan</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/siswa/create.blade.php ENDPATH**/ ?>
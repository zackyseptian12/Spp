

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
                    <div class="card-header"><?php echo e(__('Dashboard')); ?></div>
    
                    <div class="card-body">
                        <a href="<?php echo e(route('indexsiswa')); ?>" class="btn btn-success">Kembali</a><br>
                        <form action="<?php echo e(route('updatesiswa', $siswa->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <label for="id_spp">NISN</label>\
                            <input type="text" name="nisn" value="<?php echo e($siswa->nisn); ?>"><br>
                            <label for="">nis</label>
                            <input type="text" name="nis" value="<?php echo e($siswa->nis); ?>"><br>
                            <label for="">nama</label>
                            <input type="text" name="nama"value="<?php echo e($siswa->nama); ?>"><br>
                            <label for="">id_kelas</label>
                            <select name="id_kelas" id="">
                                 <option value="">Kelas</option>
                                 <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($id); ?>" <?php if($id == $siswa->id_kelas): ?> selected <?php endif; ?>><?php echo e($data); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select><br>
                            
                            <label for="">alamat</label>
                            <input type="text" name="alamat"value="<?php echo e($siswa->alamat); ?>"><br>
                            <label for="">no_hp</label>
                            <input type="text" name="no_hp"value="<?php echo e($siswa->no_hp); ?>"><br>
                            <label for="">id_spp</label>
                            <select name="id_spp" id="">
                                <option value="">ID SPP</option>
                                <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>" <?php if($id == $siswa->id_spp): ?> selected <?php endif; ?>><?php echo e($data); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select><br>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/siswa/edit.blade.php ENDPATH**/ ?>
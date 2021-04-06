
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
    <div class="card">
        <div class="card-body">
        <form action="<?php echo e(url('/history/siswa/')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
        <div class="form-group">
        <label for="nisn">NISN</label>
        <input type="text" name="nisn" class="form-control" placeholder="Masukan nisn" required>
        </div>
        
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Cari</button>
        <a href="<?php echo e(url('/history')); ?>" class="btn btn-light">Reset</a>
        
        </div>
        </form>
        </div>
        </div>
    

    <a href="/history/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
    <table border="1" align="center">
          <tr>
               <td>ID_pembayarn</td>
               <td>Petugas</td>
               <td>nisn</td>
               <td>Tanggal Bayar</td>
               <td>Bulan Bayar</td>
               <td>Tahun Bayar</td>
               <td>Jumlah Spp</td>
               <td>Jumlah Bayar</td>
               
          </tr>
        <?php $__currentLoopData = $pembayaran_view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p => $pembayaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
             <td><?php echo e($pembayaran->id); ?></td>
             <td><?php echo e($pembayaran->nama_petugas); ?></td>
             <td><?php echo e($pembayaran->nisn); ?></td>
             <td><?php echo e($pembayaran->tgl_bayar); ?></td>
             <td><?php echo e($pembayaran->bulan_bayar); ?></td>
             <td><?php echo e($pembayaran->tahun_bayar); ?></td>
             <td><?php echo e($pembayaran->nominal); ?></td>
             <td><?php echo e($pembayaran->jumlah_bayar); ?></td>
             
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/history/index.blade.php ENDPATH**/ ?>
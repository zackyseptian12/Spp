
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
</head>
<body>

    <a href="<?php echo e(route('createpembayaran')); ?>" class="btn btn-success my-3">Tambah Pembayaran</a>

    <table border="1"class="" align="center" >
          <tr >
               <td>ID_pembayarn</td>
               <td>Petugas</td>
               <td>nisn</td>
               <td>Tanggal Bayar</td>
               <td>Bulan Bayar</td>
               <td>Tahun Bayar</td>
               <td>Jumlah Spp</td>
               <td>Jumlah Bayar</td>
               <td>Action</td>
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
             <td>
                 <form action="<?php echo e(route('deletepembayaran', $pembayaran->id)); ?>" method="POST">
                 <?php echo csrf_field(); ?> 
                 <?php echo method_field('DELETE'); ?>
                 <a href="<?php echo e(route('editpembayaran', $pembayaran->id)); ?>" class="btn btn-success my-3">Edit</a>
                 <a href="<?php echo e(route('pembayaran.show', $pembayaran->id)); ?>" class="btn btn-primary my-3">show</a>
                 <button type="submit" class="btn btn-danger my-3">Delete</button>
                 </form>
             </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <script>
       
    </script>
    </table>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/pembayaran/index.blade.php ENDPATH**/ ?>
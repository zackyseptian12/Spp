
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
    <a href="<?php echo e(route('indexspp')); ?>">Kembali</a> <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Tambah Spp')); ?></div> 
                    <div class="card-body">
                        <form action="<?php echo e(route('storespp')); ?>" method="POST">
                           
                            <?php echo csrf_field(); ?>
                            <a href="<?php echo e(route('indexspp')); ?>" class="btn btn-success">Kembali</a> <br>
                            
                            <label for="">Tahun</label>
                            <input type="date" name="tahun"><br>
                            <label for="">nominal</label>
                            <input type="integer" name="nominal"><br>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/spp/create.blade.php ENDPATH**/ ?>


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
                        <a href="<?php echo e(route('indexspp')); ?>">Kembali</a>
                        <form action="<?php echo e(route('updatespp', $spp->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <a href="<?php echo e(route('indexspp')); ?>" class="btn btn-success">Kembali</a><br>
                            
                                <label for="">Tahun</label>
                                <input type="date" name="tahun" value="<?php echo e($spp->tahun); ?>"><br>
                                <label for="">nominal</label>
                                <input type="integer" name="nominal"value="<?php echo e($spp->nominal); ?>"><br>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/spp/edit.blade.php ENDPATH**/ ?>
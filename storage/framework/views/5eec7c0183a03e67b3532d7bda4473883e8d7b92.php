

<?php $__env->startSection('content'); ?>

    <?php if(Session::get('error')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('error')); ?>

        </div>
    <?php endif; ?>

        

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Tambah Pembayaran')); ?></div>
    
                    <div class="card-body">
                        <form action="<?php echo e(route('storepembayaran')); ?>" method="POST">
                            <?php echo csrf_field(); ?> 
                            <a href="<?php echo e(route('indexpembayaran')); ?>" class="btn btn-primary my-3">Kembali</a><br>
                            
                            
                            
                                
                                
                            
                            
                                
                               
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Terakhir Bayar</label>
                                    <input type="email" class="form-control" id="bulan" placeholder="" readonly>
                                </div>
                                
                            <label for="">NISN</label>
                                <select name="nisn" id="nisn" onchange="getData()" class="js-example-basic-single" >
                                    <option value="">-- PILIH NISN --</option>
                                    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=> $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($siswa->nisn); ?>" data-nominal="<?php echo e($siswa->nominal); ?>"><?php echo e($siswa->nisn.'-'.$siswa->nama.'-'.$siswa->nominal); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select> <br>
                                <label for="">Nominal</label>
                                <input type="text" name="nominal" id="nominal" readonly>
                            
                            
                            <label for="">Bulan Bayar</label>
                                <select name="bulan_bayar">
                                    <option value="January">January</option>
                                    <option value="Febuary">Febuary</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select><br>
                            
                                
                                
                                
                                <label for="">Jumlah Bayar</label>
                               
                                <input type="text" name="jumlah_bayar" ><br>     
                                      
                                <button type="submit" class="btn btn-success my-3">Simpan</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    jQuery(document).ready(function(){
    jQuery('select').change(function(){
    let nominal = jQuery(this).find(':selected').data('nominal');
    
    if(!isNaN(nominal)){
    jQuery('#nominal').val(nominal)
    }
    })
    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/pembayaran/create.blade.php ENDPATH**/ ?>
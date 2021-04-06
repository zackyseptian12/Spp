<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- select2 -->


    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <?php if(Auth::user()->role =='1'): ?>

                <a class="navbar-brand" href="<?php echo e(url('/siswa')); ?>">
                   Siswa
                </a>
                <a class="navbar-brand" href="<?php echo e(url('/spp')); ?>">
                   Spp
                </a>
                
                <a class="navbar-brand" href="<?php echo e(url('/kelas')); ?>">
                   Kelas
                </a>
                <a class="navbar-brand" href="<?php echo e(url('/pembayaran')); ?>">
                   pembayaran
                </a>
                <a class="navbar-brand" href="<?php echo e(url('/history')); ?>">
                    History
                 </a>

                 <?php elseif(Auth::user()->role =='2'): ?>
                 <a class="navbar-brand" href="<?php echo e(url('/history')); ?>">
                    History
                 </a>
                 <?php elseif(Auth::user()->role =='siswa'): ?>
                 <a class="navbar-brand" href="<?php echo e(url('/historySiswa')); ?>">
                    History siswa
                 </a>
                 <?php endif; ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <script>
        function getData(){
            var nisn = $('#nisn').val();
            console.log(nisn);
                $.ajax({
                        url:"<?php echo e(url('pembayaran/get-data/')); ?>" + '/' + nisn,
                        type: 'GET',
                        success: function(data){
                            console.log(data);
                            // $('#bulan').val(data['harga']['bulan_bayar']);
                            $('#idk').val("Rp." + data['kelas']['id']);
                            $('#kelas').val(data['kelas']['nama_kelas']);
                            $('#ids').val(data['harga']['id']);
                            $('#nominal').val(data['nominal']['nominal']);
                            if (data['akhir'].length == 0) {
                            $('#akhir').val("belum pernah bayar");
                            }else{
                            var isi = data['harga']['tahun_bayar'] + " / " + data['harga']['bulan_bayar'] + ' / ' + data['harga']['jumlah_bayar'];
                            $('#bulan').val(isi);
                        }
                    },
                    error: function(data){
                        $('#bulan').val("RP. 400000 - belum pernah bayar spp")
                    }
                });
            }
        </script>
</body>
</html>
<?php /**PATH E:\PROJEK-ZACKY\appSpp\resources\views/layouts/admin.blade.php ENDPATH**/ ?>
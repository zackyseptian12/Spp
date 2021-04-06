<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- select2 -->
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                @if(Auth::user()->role =='1')

                <a class="navbar-brand" href="{{ url('/siswa') }}">
                   Siswa
                </a>
                <a class="navbar-brand" href="{{ url('/spp') }}">
                   Spp
                </a>
                {{-- <a class="navbar-brand" href="{{ url('/petugas') }}">
                   Petugas
                </a> --}}
                <a class="navbar-brand" href="{{ url('/kelas') }}">
                   Kelas
                </a>
                <a class="navbar-brand" href="{{ url('/pembayaran') }}">
                   pembayaran
                </a>
                <a class="navbar-brand" href="{{ url('/history') }}">
                    History
                 </a>

                 @elseif(Auth::user()->role =='2')
                 <a class="navbar-brand" href="{{ url('/history') }}">
                    History
                 </a>
                 @elseif(Auth::user()->role =='siswa')
                 <a class="navbar-brand" href="{{ url('/historySiswa') }}">
                    History siswa
                 </a>
                 @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        function getData(){
            var nisn = $('#nisn').val();
            console.log(nisn);
                $.ajax({
                        url:"{{ url('pembayaran/get-data/') }}" + '/' + nisn,
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

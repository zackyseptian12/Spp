@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     
                    {{ __('You are logged in!') }} --}}
                    <a href="{{route('indexsiswa')}}">Siswa</a><br>
                    <a href="{{route('indexspp')}}">SPP</a><br>
                    <a href="{{route('indexkelas')}}">Kelas</a><br>
                    <a href="{{route('indexpetugas')}}">Petugas</a><br>
                    <a href="{{route('indexpembayaran')}}">Pembayaran</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

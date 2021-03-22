<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController as SP;
use App\http\Controllers\KelasController as KC;
use App\http\Controllers\SiswaController as SI;
use App\http\Controllers\PetugasController as PC;
use App\http\Controllers\PembayaranController as PE;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('spp', [SP::class, 'index'])->name('indexspp');
Route::get('spp/create', [SP::class, 'create'])->name('tambahspp');
Route::post('spp/store', [SP::class, 'store'])->name('storespp');
Route::delete('spp/delete/{id_spp}', [SP::class, 'delete'])->name('deletspp');
Route::put('spp/{id_spp}/update', [SP::class, 'update'])->name('updatespp');
Route::get('spp/edit/{id_spp}', [SP::class, 'edit'])->name('editspp');


Route::get('kelas', [KC::class, 'index'])->name('indexkelas');
Route::get('kelas/create', [KC::class, 'create'])->name('createkelas');
Route::post('kelas/store', [KC::class, 'store'])->name('storekelas');
Route::delete('kelas/delete/{id_kelas}', [KC::class, 'delete'])->name('deletkelas');
Route::get('kelas/edit/{id_kelas}', [KC::class, 'edit'])->name('editkelas');
Route::put('kelas/{id_kelas}/update', [KC::class, 'update'])->name('updatekelas');

Route::get('siswa', [SI::class, 'index'])->name('indexsiswa');
Route::get('siswa/create', [SI::class, 'create'])->name('createsiswa');
Route::post('siswa/store', [SI::class, 'store'])->name('storesiswa');
Route::delete('siswa/delete/{id}', [SI::class, 'delete'])->name('deletesiswa');
Route::get('siswa/edit/{id}', [SI::class, 'edit'])->name('editsiswa');
Route::put('siswa/{id}/update', [SI::class, 'update'])->name('updatesiswa');

Route::get('petugas', [PC::class, 'index'])->name('indexpetugas');
Route::get('petugas/create', [PC::class, 'create'])->name('createpetugas');
Route::post('petugas/store', [PC::class, 'store'])->name('storepetugas');
Route::delete('petugas/delete/{id}', [PC::class, 'delete'])->name('deletepetugas');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('pembayaran', [PE::class, 'index'])->name('indexpembayaran');
Route::get('pembayaran/create', [PE::class, 'create'])->name('createpembayaran');
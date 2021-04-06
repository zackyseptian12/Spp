<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SppController as SP;
use App\http\Controllers\KelasController as KC;
use App\http\Controllers\SiswaController as SI;
use App\http\Controllers\PetugasController as PC;
use App\http\Controllers\PembayaranController as PE;
use App\Http\Controllers\HistoriController as HC;
use App\Http\Controllers\pembayaranSiswaController;
use Illuminate\Support\Facades\Auth;

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
Route::delete('spp/delete/{id}', [SP::class, 'delete'])->name('deletspp');
Route::put('spp/{id}/update', [SP::class, 'update'])->name('updatespp');
Route::get('spp/edit/{id}', [SP::class, 'edit'])->name('editspp');


Route::get('kelas', [KC::class, 'index'])->name('indexkelas');
Route::get('kelas/create', [KC::class, 'create'])->name('createkelas');
Route::post('kelas/store', [KC::class, 'store'])->name('storekelas');
Route::delete('kelas/delete/{id}', [KC::class, 'delete'])->name('deletkelas');
Route::get('kelas/edit/{id}', [KC::class, 'edit'])->name('editkelas');
Route::put('kelas/{id}/update', [KC::class, 'update'])->name('updatekelas');

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
Route::get('petugas/edit/{id}', [PC::class, 'edit'])->name('editpetugas');
Route::put('petugas/{id}/update', [PC::class, 'update'])->name('updatepetugas');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pembayaran', [PE::class, 'index'])->name('indexpembayaran');
Route::get('pembayaran/create', [PE::class, 'create'])->name('createpembayaran');
Route::post('pembayaran/store', [PE::class, 'store'])->name('storepembayaran');
Route::delete('pembayaran/delete/{id}', [PE::class, 'delete'])->name('deletepembayaran');
Route::get('pembayaran/edit/{id}', [PE::class, 'edit'])->name('editpembayaran');
Route::put('pembayaran/{id}/update', [PE::class, 'update'])->name('updatepembayaran');
Route::get('pembayaran/get-data/{nisn}', [PE::class, 'getDataSpp']);
Route::get('/pembayaran/show/{pembayaran}', [PE::class, 'show'])->name('pembayaran.show');


Route::get('history', [HC::class, 'index'])->name('indexhistory');
Route::get('history/export_excel', [HC::class, 'export_excel']);
Route::get('history/list', [HC::class, 'getStudents'])->name('students.list');
Route::post('history/siswa/', [HC::class, 'findStudent']);
Route::get('historySiswa/', [pembayaranSiswaController::class, 'index'])->name('historySiswa');
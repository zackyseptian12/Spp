<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran_view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pembayaranSiswaController extends Controller
{
    public function index()
    {
        $data = Pembayaran_view:p:where('nisn', Auth::user()->nio)->get();
        return view('history.siswa', compact('data'));
    }
   
}

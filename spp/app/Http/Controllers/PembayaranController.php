<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('pembayaran'));
    }
}

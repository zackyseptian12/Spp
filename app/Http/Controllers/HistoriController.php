<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pembayaran_view;
class HistoriController extends Controller
{
    public function index()
    {
        $pembayaran_view = Pembayaran_view::all();
        $pembayaran = Pembayaran::all();
        return view('history.index', compact('pembayaran','pembayaran_view'));
    }
}

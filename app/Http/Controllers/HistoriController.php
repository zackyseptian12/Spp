<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pembayaran_view;
use App\Exports\Pembayaran_viewExport;
use Maatwebsite\Excel\Facades\Excel;
class HistoriController extends Controller
{
    public function index()
    {
        $pembayaran_view = Pembayaran_view::all();
        $pembayaran = Pembayaran::all();
        return view('history.index', compact('pembayaran','pembayaran_view'));
    }

    public function export_excel()
	{
		return Excel::download(new Pembayaran_viewExport, 'pembayaran_view.xlsx');
	}

    public function findStudent(Request $request)
        {
        $pembayaran_view = Pembayaran_view::where('nisn', $request->nisn)->get();

        return view('history.index', compact('pembayaran_view'));
        }
}

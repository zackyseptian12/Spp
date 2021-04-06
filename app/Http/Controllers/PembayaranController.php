<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Spp;
use App\Models\Petugas;
use App\Models\Pembayaran;
use App\Models\Pembayaran_view;
use Carbon\Carbon;

use App\Models\Siswa;
use App\Models\Siswa_view;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all();
        $pembayaran = Pembayaran::all();
        $pembayaran_view = Pembayaran_view::all();
        $view_siswa = Siswa_view::all();
        return view('pembayaran.index', compact('pembayaran','petugas','pembayaran_view'));

    }

    public function create()
    {
        $data = [
            'petugas' => Petugas::all(),
            'spp' => Spp::all(),
            'siswa' => Siswa::all(),
        ];
        
        return view('pembayaran.create', $data);
    }

    public function store(Request $request)
    {
        
       $siswa = Siswa::where('nisn','=',$request->nisn)->first();
        $spp = Spp::where('id','=',$siswa->id_spp)->first(); 
        // $cekBulan = Pembayaran::where('bulan_bayar','=',$request->bulan_bayar)->where('nisn', $request->nisn)->where('tahun_bayar', '=', $request->tahun_bayar)->first();

        // if($cekBulan){
        // return back()->with('Ok','Mohon Maaf, Bulan Sudah Dibayar');
        // }
         
        if($request->jumlah_bayar < $spp->nominal){
            return back()->with('error','Uangnya Kurang');
        } else {
        // dd($request->all());
        Pembayaran::create([
            // 'id_pembayaran'=>$request->id_pembayaran,
            'id_petugas'=>Auth::user()->id, 
            'nisn'=>$request->nisn,
            'tgl_bayar'=>Carbon::now()->timezone('Asia/Jakarta'),
            'bulan_bayar'=>$request->bulan_bayar,
            'tahun_bayar'=>'21',
            'id_spp'=>$spp->id,
            'jumlah_bayar'=>$request->jumlah_bayar,
        ]);
        $kembalian = $request->jumlah_bayar - $spp->nominal;
            return redirect('/pembayaran')->with('success', 'kembalian anda ' . $kembalian);
        }
    }

    public function getDataSpp($nisn)
{
        $siswa = Siswa::where('nisn', $nisn)->first();
        $view_siswa = Siswa_view::where('nisn', $nisn)->get();
        $spp = Spp::find($siswa->id_spp);
        $pembayaran = Pembayaran::where('nisn', $nisn)->get();
        $indx = array_key_last(end($pembayaran));
        $urutan = array_key_last(end($view_siswa));
        $data = [
                'harga' => $pembayaran[$indx],
                'siswa' => $siswa[$indx],
                'kelas' => Kelas::find($siswa->id_kelas),
                'akhir' => $pembayaran,
                'nominal' => $view_siswa[$urutan],
        ];
return response()->json($data);
}

    public function delete($id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return redirect()->route('indexpembayaran');
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.edit', compact('pembayaran'));

    }

    public function update(Request $request, $id)
    {
       $request = Pembayaran::find($id)->update($request->all());
       return redirect()->route('indexpembayaran');
    }
    public function show(Pembayaran_view $pembayaran)
        {
        return view('pembayaran.show', compact('pembayaran'));
            }
}

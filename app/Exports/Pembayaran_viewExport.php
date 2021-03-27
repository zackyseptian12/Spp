<?php

namespace App\Exports;

use App\Pembayaran_view;
use Maatwebsite\Excel\Concerns\FromCollection;

class Pembayaran_viewExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pembayaran_view::all();
    }
}

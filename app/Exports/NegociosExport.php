<?php

namespace App\Exports;

use App\Models\Negocio;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NegociosExport implements FromView
{

    public function view():View
    {
        return view('negocio.excel', [
            'negocios' => Negocio::with('categorias', 'usuarios')->get()
        ]);
    }
}

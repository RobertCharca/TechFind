<?php

namespace App\Exports;

use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class UsuarioExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Usuario::all();
    }
    public function view(): View
    {
        return view('excel.usuarioExcel', [
            'usuarios' => Usuario::all()
        ]);
    }
}

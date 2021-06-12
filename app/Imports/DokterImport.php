<?php

namespace App\Imports;

use App\Models\Dokter;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\DB;


class DokterImport implements ToModel
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Dokter([
            'nama'     => $row[0],
            'jabatan'    => $row[1], 
        ]);
    
    }
}

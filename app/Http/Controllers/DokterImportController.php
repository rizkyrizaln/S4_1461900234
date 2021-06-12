<?php

namespace App\Http\Controllers;
use App\Imports\DokterImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterImportController extends Controller
{
    
    public function index() 
    {
        return view('import_0234');
    }
    public function import(Request $request) 
    {
        $file = $request->file('file');
        (new DokterImport)->import($file);

        return redirect('');

    }


}

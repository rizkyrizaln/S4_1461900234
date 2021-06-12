<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DokterController extends Controller
{
    public function index()
    {
        $dokter = \App\Models\Dokter::leftjoin('kamar', 'dokter.id', '=', 'kamar.id_dokter')
        ->leftjoin('pasien', 'pasien.id', '=', 'kamar.id_pasien')
        ->select(
            array(
                'pasien.*',
                'dokter.jabatan',
                \App\Models\Dokter::raw('dokter.nama AS nama_dokter'),
                \App\Models\Dokter::raw('dokter.id AS id_dokter'),
              )
        )
        ->get();

        return view('index_0234', ['dokter' => $dokter]);
    }

    public function add()
    {
        return view('add_0234');
    }

    public function tambah(Request $request)
    {
        
        $dokter = \App\Models\Dokter::insert([
            'nama' => $request->nama_b,
            'jabatan' => $request->jabatan_b,
        ]);
        $id = DB::getPdo()->lastInsertId();
        DB::table('kamar')->insert([
            'id_dokter' => $id,
            'id_pasien' => 1,
        ]);
        
        
        return redirect('');
    }

    public function edit($id)
    {
        $dokter = \App\Models\Dokter::join('kamar', 'dokter.id', '=', 'kamar.id_dokter')
        ->join('pasien', 'pasien.id', '=', 'kamar.id_pasien')
        ->select(
            array(
                'pasien.*',
                'dokter.jabatan',
                \App\Models\Dokter::raw('dokter.nama AS nama_dokter'),
                \App\Models\Dokter::raw('dokter.id AS id_dokter'),

              )
        )
        ->where('id_dokter', $id)
        ->get();
        return view('edit_0234', ['dokter' => $dokter]);
    }

    public function update(Request $request)
    {
        Db::table('dokter')->where('id', $request->id)->update([
            'nama' => $request->nama_b,
            'jabatan' => $request->jabatan_b,
        ]);
        return redirect('');
    }

    public function del($id)
    {
        DB::table('kamar')->where('id_dokter', $id)->delete();
        \App\Models\Dokter::where('id', $id)->delete();

        return redirect('');
    }
    
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Prodi;

class MahasiswaController extends Controller
{
    public function getMahasiswa()
    {
        $mahasiswas = Mahasiswa::get();


        foreach ($mahasiswas as  $mahasiswa) {
            $prodi = Prodi::where('id', $mahasiswa['prodi_id'])->first();
            $mahasiswa['prodi_nama'] = $prodi['nama'];
        }
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Mahasiswa',
            'data' => $mahasiswas,
        ];
        // dd($mahasiswas);
        // dd($respon()->json($respon));
        return response()->json($respon);
    }

    public function mahasiswa($id)
    {
        $mahasiswa = Mahasiswa::where('id', $id)->get();
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Mahasiswa',
            'data' => $mahasiswa,
        ];
        return response()->json($respon);
    }

    public function createMahasiswa(Request $request)
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi_id' => $request->prodi_id,
        ]);
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Membuat data Mahasiswa',
            'data' => $mahasiswa,
        ];
        return response()->json($respon);
    }
}

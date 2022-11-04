<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function getMahasiswa()
    {
        $mahasiswa = Mahasiswa::get();
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Mahasiswa',
            'data' => $mahasiswa,
        ];
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

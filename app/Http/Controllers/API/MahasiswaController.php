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
            $mahasiswa['prodi_nama'] = $mahasiswa->prodi->nama;
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
        $mahasiswa = Mahasiswa::where('id', $id)->get()->first();

        $mahasiswa['prodi_nama'] = $mahasiswa->prodi->nama;
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Mahasiswa',
            'data' => $mahasiswa,
        ];
        return response()->json($respon);
    }

    public function createMahasiswa(Request $request)
    {

        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|unique:mahasiswas|string',
            'prodi_id' => 'required',
        ]);

        $mahasiswa = Mahasiswa::create($validateData);
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Membuat data Mahasiswa',
            'data' => $mahasiswa,
        ];
        return response()->json($respon);
    }

    public function getProdis()
    {
        $prodis = Prodi::all();

        $respon = [
            'status' => 'success',
            'msg' => 'Tuh data Prodi',
            'data' => $prodis,
        ];

        return response()->json($prodis);
    }
}

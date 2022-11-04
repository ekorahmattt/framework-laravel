<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Prodi;
// use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('index', [
            'mahasiswas' => Mahasiswa::all(),
            'Title' => 'Mahasiswa',
        ]);
    }

    // public function indexku()
    // {
    //     $endpoint = 'http://localhost:8000/api/mahasiswa';
        
    //     $response = Http::get($endpoint);
    //     dd($response->body());
    //     $data = json_decode($response->body(), true);
    //     dd($data);
    //     return view('index')
    //         ->with('mahasiswas', $data)
    //         ->with('Title', 'Mahasiswas');
    // }

    public function create()
    {
        return view('create', [
            'prodis' => Prodi::all(),
            'title' => 'Create Mahasiswa',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|unique:mahasiswas|string',
            'prodi_id' => 'required',
        ]);

        Mahasiswa::create($validateData);

        return redirect('/mahasiswa')->with('success', 'Berhasil Menambahkan data mahasiswa');
    }

    public function show(Mahasiswa $id)
    {
        return view('show', [
            'mahasiswa' => $id,
            'title' => 'Mahasiswa',
        ]);
    }

    public function edit(Mahasiswa $id)
    {
        return view('edit', [
            'mahasiswa' => $id,
            'title' => 'Mahasiswa',
            'prodis' => Prodi::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|unique:mahasiswas|string',
            'prodi_id' => 'required',
        ]);

        $mahasiswa->update($validateData);

        return redirect('/mahasiswa')->with('success', 'Berhasil Mengupdate data mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('success', 'Berhasil Menghapus data mahasiswa');
    }
}

@extends('layouts.global')

@section('title')
    ini halaman Home
@endsection

@section('content')
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Good Bye Worlds!</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Prodi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <th scope="row">{{ $mahasiswa->id }}</th>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->prodi->nama }}</td>
                        {{-- Cukup Panggil seperti di atas --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

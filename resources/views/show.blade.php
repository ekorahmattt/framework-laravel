@extends('layouts.global')
@section('title')
    Show Data Mahasiswa
@endsection
@section('content')
    <div class="container">
        <h3><strong>LIHAT DATA</strong></h3>
        <hr>
        <br>
        <table class="table table-borderless">
            <tr>
                <td>
                    <h4>Nama</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $mahasiswa->nama }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Nim</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $mahasiswa->nim }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Prodi</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $mahasiswa->prodi->nama }}</h4>
                </td>
            </tr>
        </table>
    </div>
@endsection

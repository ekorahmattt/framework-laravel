@extends('layouts.global')
@section('title')
    Edit Mahasiswa
@endsection
@section('content')
    <div class="container">
        <form action="/mahasiswa/{{$mahasiswa->id}}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>

                <input type="text" class="form-control @error('nama') is-
invalid @enderror" id="nama" name="nama"
                    placeholder="Nama Mahasiswa" value="{{$mahasiswa->nama}}" required>

                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" class="form-control @error('nim') is-invalid

@enderror" id="nim" name="nim" value="{{$mahasiswa->nim}}"
                    placeholder="Nim" required>

                @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label ">Prodi</label>
                <select name="prodi_id" id="prodi_id" class="form-select

@error('prodi_id') is-invalid @enderror"
                    aria-label="Default select example">
                    <option value="" selected>Pilih</option>
                    @foreach ($prodis as $prodi)
                        <option value={{ $prodi->id }}>{{ $prodi->nama }}</option>
                    @endforeach
                </select>
                @error('prodi_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </form>
    </div>
@endsection

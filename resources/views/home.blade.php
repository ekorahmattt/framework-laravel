@extends('layouts.global')

@section('title')
ini halaman Home
@endsection

@section('content')
<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Good Bye Worlds!</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    @foreach ($prodis as $prodi)
        <div class=" col">
            <div class="d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
                <i class="bi {{ $prodi['logo'] }}"></i>
            </div>
            <h3 class="fs-2">{{ $prodi['nama'] }}</h3>
            <p>{{ $prodi['fakultas'] }}</p>
        </div>
    @endforeach
    </div>
</div>
@endsection
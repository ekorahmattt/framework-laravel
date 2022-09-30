{{$prodi='informatika'}}
@if ($prodi == 'informatika')
    <p>Anda di fakultas Teknik</p>
@elseif ($prodi == 'Akutansi')
    <p>Anda di Fakultas Ekonomi dan bisnis</p>
@else
    <p>Anda bukan mahasiswa sini</p>
@endif
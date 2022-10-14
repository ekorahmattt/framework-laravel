<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    protected $table = "mahasiswas";
    protected $fillable = ['id', 'nama', 'nim', 'jurusan', 'angkatan'];
}

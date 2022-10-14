<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    public function mahasiswa() {
        return $this->hasMany(Mahasiswa::class);
    }

    use HasFactory;
}

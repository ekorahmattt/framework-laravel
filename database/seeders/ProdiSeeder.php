<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodis = [
            [
            "logo" => "bi-emoji-smile-upside-down",
            "nama" => "informatika",
            "fakultas" => "Teknik"        
            ],
            [
            "logo" => "bi-emoji-smile",
            "nama" => "akutansi",
            "fakultas" => "Ekonomi Bisnis"        
            ],
            [
            "logo" => "bi-emoji-sunglasses",
            "nama" => "fisika",
            "fakultas" => "FMIPA"        
            ],
        ];
        foreach ($prodis as $prodi) {
            Prodi::create([
                'logo' => $prodi["logo"],
                'nama' => $prodi["nama"],
                'fakultas' => $prodi["fakultas"]
            ]);
        }
    }
}

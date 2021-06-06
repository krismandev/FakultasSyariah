<?php

use App\Prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::create([
            'nama_prodi' => 'Hukum Pidana Islam',
        ]);

        Prodi::create([
            'nama_prodi' => 'Hukum Keluarga Islam',
        ]);

        Prodi::create([
            'nama_prodi' => 'Perbandingan Madzhab',
        ]);

        Prodi::create([
            'nama_prodi' => 'Hukum Ekonomi Syariah',
        ]);

        Prodi::create([
            'nama_prodi' => 'Ilmu Pemerintahan',
        ]);

        Prodi::create([
            'nama_prodi' => 'Hukum Tata Negara',
        ]);


    }
}

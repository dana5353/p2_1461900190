<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi = "1461900217";
        $mhs1->nama_mhs = "Sohibul";
        $mhs1->save();

        $mhs2 = new Mahasiswa();
        $mhs2->nbi = "1461901217";
        $mhs2->nama_mhs = "Wafa";
        $mhs2->save();
    }
}

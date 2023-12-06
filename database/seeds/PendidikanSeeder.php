<?php

use App\Models\Pendidikan;
use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pendidikan::create(['nama' => 'TIDAK / BELUM SEKOLAH',]);
        Pendidikan::create(['nama' => 'BELUM TAMAT SD/SEDERAJAT',]);
        Pendidikan::create(['nama' => 'TAMAT SD / SEDERAJAT',]);
        Pendidikan::create(['nama' => 'SLTP/SEDERAJAT',]);
        Pendidikan::create(['nama' => 'SLTA / SEDERAJAT',]);
        Pendidikan::create(['nama' => 'DIPLOMA IV/ STRATA I',]);
    }
}

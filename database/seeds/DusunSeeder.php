<?php

use App\Models\Dusun;
use Illuminate\Database\Seeder;

class DusunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dusun = [
            ['nama' => 'Dusun Kumu'],
            ['nama' => 'Dusun Kumu Sejati'],
            ['nama' => 'Dusun Kumu Deli'],
            ['nama' => 'Dusun Kumu Baru'],
            ['nama' => 'Dusun Suarau Tinggi U'],
            ['nama' => 'Dusun Surau Tinggi S'],
            ['nama' => 'Dusun Suarau Tinggi B'],
            ['nama' => 'Dusun Simpang D 1'],
            ['nama' => 'Dusun Simpang D 2'],
            ['nama' => 'Dusun Simpang D 3'],
            ['nama' => 'Dusun Nogori Kumu'],
        ];
        foreach ($dusun as $dusun) {
            Dusun::create($dusun);
        }

    }
}

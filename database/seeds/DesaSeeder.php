<?php

use App\Models\Desa;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Desa::create([
            'nama_desa'         => 'Rambah',
            'nama_kecamatan'    => 'Rambah Hilir',
            'nama_kabupaten'    => 'Rokan Hulu',
            'tagline_desa'      => 'Di Desa Kami, Anda akan merasakan kehangatan dan keramahan penduduk setempat. Kami mengundang Anda untuk berbagi cerita, menjalin ikatan, dan menciptakan kenangan yang tak terlupakan bersama kami.',
            'alamat'            => 'Rambah, Kec. Rambah Hilir, Kabupaten Rokan Hulu, Riau 28558',
            'logo'              => "logo-1.png",
            'sejarah_desa'      => 'Content Sejarah Desa',
            'pengumuman'        => 'Content Pengumuman',
            "kode_desa"=>"13.73.04.2011"
        ]);
    }
}

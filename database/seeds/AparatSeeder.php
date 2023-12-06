<?php

use App\Aparat;
use Illuminate\Database\Seeder;

class AparatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $aparats = [
            [
                'nama_aparat' => 'Adi Saputra, S.Ip',
                'gambar' => null,
                'jabatan' => 'Kepala Desa'
            ],
            [
                'nama_aparat' => 'Hairunnas Elfis',
                'gambar' => null,
                'jabatan' => 'Sekretaris Desa'
            ],
            [
                'nama_aparat' => 'Nasrul',
                'gambar' => null,
                'jabatan' => 'Kaur Keuangan'
            ],
            [
                'nama_aparat' => 'Hamdan',
                'gambar' => null,
                'jabatan' => 'Kaur Pemerintahan'
            ],
            [
                'nama_aparat' => 'Alde Antoni. Y',
                'gambar' => null,
                'jabatan' => 'Kaur Pembangunan'
            ],
            [
                'nama_aparat' => 'Sulastri',
                'gambar' => null,
                'jabatan' => 'Kaur Umum'
            ],
            [
                'nama_aparat' => 'Robin Aprizal',
                'gambar' => null,
                'jabatan' => 'Kasi Kesejahteraan'
            ],
            [
                'nama_aparat' => 'Murni',
                'gambar' => null,
                'jabatan' => 'Kasi Pelayanan'
            ],
            [
                'nama_aparat' => 'Apris Topol',
                'gambar' => null,
                'jabatan' => 'Kadus Kumu'
            ],
            [
                'nama_aparat' => 'Antony Wijaya',
                'gambar' => null,
                'jabatan' => 'Kadus Kumu Nugori'
            ],
            [
                'nama_aparat' => 'Usman',
                'gambar' => null,
                'jabatan' => 'Kadus Kumu Sejati'
            ],
            [
                'nama_aparat' => 'Yunus',
                'gambar' => null,
                'jabatan' => 'Kadus Srt. Selatan'
            ],
            [
                'nama_aparat' => 'Afrizal',
                'gambar' => null,
                'jabatan' => 'Kadus Srt. Utara'
            ],
            [
                'nama_aparat' => 'Jasmin',
                'gambar' => null,
                'jabatan' => 'Kadus Srt. Barat'
            ],
            [
                'nama_aparat' => 'Susandi',
                'gambar' => null,
                'jabatan' => 'Kadus Kumu Deli'
            ],
            [
                'nama_aparat' => 'Murzal Hasian L.',
                'gambar' => null,
                'jabatan' => 'Kadus Kumu Baru'
            ],
            [
                'nama_aparat' => 'Zulhamzah',
                'gambar' => null,
                'jabatan' => 'Kadus Simp.D I'
            ],
            [
                'nama_aparat' => 'Ramadhani',
                'gambar' => null,
                'jabatan' => 'Kadus Simp D II'
            ],
            [
                'nama_aparat' => 'Alip Ramadani',
                'gambar' => null,
                'jabatan' => 'Kadus Simp D III'
            ],
        ];

        foreach ($aparats as $aparat) {
            Aparat::create($aparat);
        }

    }
}

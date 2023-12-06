<?php

use App\Desa;
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
            // 'nama_kepala_desa'  => "Abdul Hafiz Tarmizi",
            // 'alamat_kepala_desa'=> "Dusun Pakanamo, Desa Rantih, Kecamatan Talawi, Kota Sawahlunto",
            'logo'              => "logo-1.png",
            'sejarah_desa'      => 'Content Sejarah Desa',
            'pengumuman'        => 'Content Pengumuman',
            // 'kata_sambutan_desa'=> "<h3>Sambutan Kepala Desa</h3><p><br></p><p>Assalamualaikum wr. wb                            Segala puji hanya milik Allah Tuhan Yang Maha Esa. Shalawat serta salam semoga tetap tersampaikan kepada Rasulullah Muhammad SAW.                            <br><br>                            Kami sampaikan selamat datang di website Desa Rantih. Kami senang Anda sudah berkunjung, melalui website ini kami dapat memberikan informasi yang aktual langsung dari Desa kami.                            <br><br>                            Website ini merupakan salah satu bentuk komitmen Pemerintah Desa Rantih, dalam mengelola Desa secara transparan.                            <br><br>                            Selain media komunikasi dan informasi publik, website ini juga memudahkan pelayanan administrasi kependudukan, dan pengelolaan administrasi pemerintahan di Desa berbasis Teknologi Informasi.                            <br><br>                            Wasalamualakum wr. wb</p>",
            // "gambar" => "public/kades/VtOdepJUYMewyGMH5tYUaV9Ha9oHoK5mXVmjI93k.jpg",
            // "nama_wilayah"=> "",
            // "deskripsi_wilayah"=>"",
            // "peta_wilayah"=>"",
            "kode_desa"=>"13.73.04.2011"
        ]);
    }
}

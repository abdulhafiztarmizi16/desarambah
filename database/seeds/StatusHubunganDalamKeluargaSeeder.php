<?php

use App\Models\StatusHubunganDalamKeluarga;
use Illuminate\Database\Seeder;

class StatusHubunganDalamKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // StatusHubunganDalamKeluarga::create(['nama' => 'KEPALA KELUARGA']);
        StatusHubunganDalamKeluarga::create(['nama' => 'SUAMI']);
        StatusHubunganDalamKeluarga::create(['nama' => 'ISTRI']);
        StatusHubunganDalamKeluarga::create(['nama' => 'ANAK']);
        StatusHubunganDalamKeluarga::create(['nama' => 'MENANTU']);
        StatusHubunganDalamKeluarga::create(['nama' => 'CUCU']);
        StatusHubunganDalamKeluarga::create(['nama' => 'ORANGTUA']);
        StatusHubunganDalamKeluarga::create(['nama' => 'MERTUA']);
        StatusHubunganDalamKeluarga::create(['nama' => 'KEPONAKAN']);
        StatusHubunganDalamKeluarga::create(['nama' => 'PEMBANTU']);
        // StatusHubunganDalamKeluarga::create(['nama' => 'LAINNYA']);
    }
}

<?php

use App\Models\Visimisi;
use Illuminate\Database\Seeder;

class VisimisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visimisi::create([
            'visi_desa'   => 'Terwujudnya Masyarakat desa Rambah yang aman, damai, adil makmur, sentosa dan sejahtera dengan beriman dan bertaqwa kepada Tuhan Yang Maha Esa yang didukung oleh Masyarakat yang sehat, mandiri dan berilmu pengetahuan yang cukup berdisiplin serta mempunyai kesadaran bergotong-royong yang tinggi dengan berasaskan kepada Pancasila dan UUD 1945',
            'misi_desa'   => 'Pengamalan Pancasila secara konsisten dalam kehidupan bermasyarakat, berbangsa dan bernegara',
        ]);
        Visimisi::create([
            'misi_desa'   => 'Peningkatan pengamalan ajaran agama dalam kehidupan sehari-hari untuk mewujudkan kualitas keimanan dan ketaqwaaan kepada Tuhan yang Maha Esa dalam kehidupan dan mantapkan persaudaraan umat beragama yang beraklak mulia, toleran, rukun dan damai. ',
        ]);
        Visimisi::create([
            'misi_desa'   => 'Penjaminan kondisi aman, damai, tertib dan ketentraman masyarakat',
        ]);
        Visimisi::create([
            'misi_desa'   => 'Perwujudan kesejahteraan rakyat yang ditandai meningkatnya kualitas kehidupan yang layak dan dan bermartabat serta memberi perhatian utama pada tercukupinya kebutuhan dasar yaitu pangan, sandang, papan, kesehatan, pendidikan dan lapangan kerja',
        ]);
        Visimisi::create([
            'misi_desa'   => 'Perwujudan Aparatur Pemerintah Desa yang berfungsi melayani masyarakat, profesional, berdaya guna, produktif, transparan, bebas dari korupsi,kolusi, dan nepotisme.',
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailJenisAnggaran extends Model
{
    protected $table = "detail_jenis_anggaran";
    protected $guarded = [];

    public function kelompok_jenis_anggaran()
    {
        return $this->belongsTo('App\Models\KelompokJenisAnggaran');
    }

    public function jenis_anggaran()
    {
        return $this->belongsTo('App\Models\JenisAnggaran');
    }

    public function anggaran_realisasi()
    {
        return $this->hasMany('App\Models\AnggaranRealisasi');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = "penduduk";
    protected $guarded = [];

    public function pekerjaan()
    {
        return $this->belongsTo('App\Models\Pekerjaan');
    }

    public function pendidikan()
    {
        return $this->belongsTo('App\Models\Pendidikan');
    }

    public function agama()
    {
        return $this->belongsTo('App\Models\Agama');
    }

    public function darah()
    {
        return $this->belongsTo('App\Models\Darah');
    }

    // public function dusun()
    // {
    //     return $this->belongsTo('App\Dusun');
    // }
    public function dusun()
    {
        return $this->belongsTo(Dusun::class, 'id_dusun');
    }
    public function detailDusun()
    {
        return $this->belongsTo('App\Models\DetailDusun');
    }

    public function statusHubunganDalamKeluarga()
    {
        return $this->belongsTo('App\Models\StatusHubunganDalamKeluarga');
    }

    public function statusPerkawinan()
    {
        return $this->belongsTo('App\Models\StatusPerkawinan');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailDusun extends Model
{
    protected $table = "detail_dusun";
    protected $guarded = [];

    public function penduduk()
    {
        return $this->hasMany('App\Penduduk');
    }

    public function dusun()
    {
        return $this->belongsTo(Dusun::class, 'dusun_id');
    }
}

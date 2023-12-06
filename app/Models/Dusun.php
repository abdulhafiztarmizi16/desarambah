<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    protected $table = "dusun";
    protected $guarded = [];

    public function penduduk()
    {
        return $this->hasMany('App\Penduduk');
    }

    public function detailDusun()
    {
        return $this->hasMany('App\DetailDusun');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkreditasiProdi extends Model
{
    protected $guarded = [];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}

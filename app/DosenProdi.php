<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenProdi extends Model
{
    protected $guarded = [];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $guarded =[];

    public function akreditasi_prodi()
    {
        return $this->hasMany(AkreditasiProdi::class,'prodi_id','id');
    }
}

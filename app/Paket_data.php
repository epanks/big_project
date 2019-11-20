<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket_data extends Model
{
    protected $table='paket';

    public function Kode_output(){
        return $this->belongsTo(Kode_output::class,'kdoutput','kdoutput_id');
    }
}

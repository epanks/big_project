<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kode_output extends Model
{
    protected $table='tblkdoutput2';

    public function paket_data(){
        return $this->hasMany(Paket_data::class,'kdoutput_id','kdoutput');
    }
}

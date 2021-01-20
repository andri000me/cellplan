<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
	protected $primaryKey = 'id';
	protected $fillable = ['kec_nama'];
    
    public function kelurahan()
    {
    	return $this->hasMany('App\Models\Kelurahan','kec_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemilikMenara extends Model
{
    protected $table = 'pemilik_menara';
	protected $primaryKey = 'id';
	protected $fillable = [
		'ptm_nama',
		'ptm_pic_nama',
		'ptm_pic_ktp',
		'ptm_almt',
		'ptm_hp',
		'ptm_email',
	];

	public function menara()
    {
    	return $this->hasMany('App\Models\Menara','ptm_id','id');
    }
}

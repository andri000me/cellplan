<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menara extends Model
{
    protected $table = 'menara';
	protected $primaryKey = 'id';
	protected $fillable = [
		'ptm_id',
		'kec_id',
		'kel_id',
		'mnrstat_id',
		'mnr_side_id',
		'mnr_side_nama',
		'mnr_side_almt',
		'mnr_lat',
		'mnr_lng',
		'mnr_l',
		'mnr_t',
		'mnr_jns_lkl',
		'mnr_jns',
		'mnr_struk',
		'mnr_akses',
		'mnr_thn'
	];

	public function kelurahan()
    {
    	return $this->belongsTo('App\Models\Kelurahan');
    }

    public function pemilikmenara()
    {
    	return $this->belongsTo('App\Models\PemilikMenara');
    }

    public function pengguna()
    {
    	return $this->belongsToMany('App\Models\Pengguna');
    }
    public function menara_pengguna()
    {
    	return $this->hasMany(Menara_pengguna::class);
    }
}

class Menara_pengguna extends Model
{
	
	protected $table = 'menara_pengguna';
	protected $primaryKey = 'id';
	protected $fillable = [
		'menara_id',
		'pengguna_id',
	];
}
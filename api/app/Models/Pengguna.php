<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
	protected $primaryKey = 'id';
	protected $fillable = [
		'pg_layan',
		'pg_nama',
	];

	public function menara()
    {
    	return $this->belongsToMany('App\Models\Menara');
    }
}

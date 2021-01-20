<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'menara_status';
	protected $primaryKey = 'id';
	protected $fillable = [
		'mnrstat_mnr',
	];

	public function Menara()
    {
    	return $this->hasMany('App\Models\Menara');
    }
}
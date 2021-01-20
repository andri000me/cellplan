<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
    protected $table = 'grid';
	protected $primaryKey = 'id';
	protected $fillable = [
		'user_id',
		'grid_kapasitas',
		'grid_poly',
		'grid_color',
		'grid_type',
		'grid_nama',
	];
}

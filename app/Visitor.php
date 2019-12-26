<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
	protected $fillable = [
		'name', 'email', 'num_of_passes', 'comments'
	];
}

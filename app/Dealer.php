<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
	public function promotions()
	{
		return $this->belongsTo(Promotion::class);
	}
}

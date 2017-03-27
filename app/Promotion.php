<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
			'title',
			'description',
			'images',
			'start',
			'end'
		];

		public function dealers()
    {
      return $this->hasMany(Dealer::class);
    }
}

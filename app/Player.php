<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = [];

    public function gameInstances()
    {
    	return $this->hasMany(Game::class);
    }
}

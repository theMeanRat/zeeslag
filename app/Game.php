<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = [];

    public function gameType()
    {
    	return $this->belongsTo(GameType::class);
    }

    public function winner()
    {
    	return $this->belongsTo(Player::class);
    }

    public function firstPlayer()
    {
    	return $this->belongsTo(Player::class);
    }

    public function secondPlayer()
    {
    	return $this->belongsTo(Player::class);
    }

    public function complete($completed = true)
    {
    	$this->update(compact('completed'));
    }

    public function incomplete()
    {
    	$this->complete(false);
    }
}

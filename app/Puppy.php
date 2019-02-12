<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puppy
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
	
}
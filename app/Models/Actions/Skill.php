<?php

namespace App\Models\Actions;

use Illuminate\Database\Eloquent\Model;

use ReflectionClass;

class Skill extends Model
{
	
	public function getName()
	{
		$reflector = new ReflectionClass($this);
		return $reflector->getShortName();
	}

}

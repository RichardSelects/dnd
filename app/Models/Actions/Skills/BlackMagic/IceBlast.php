<?php

namespace App\Models\Actions\Skills\BlackMagic;

use Illuminate\Database\Eloquent\Model;

use App\Models\Beings\Being;
use App\Models\Actions\Skill;

class IceBlast extends Skill
{
	
	private $aoe         = TRUE;	
	
	CONST BASE_DAMAGE    = 2;
	CONST BASE_RANGE	 = 2;
	CONST ELEMENT 		 = 'ice';

	public function applyTo(Being $caster)
	{
		/*
		$targets = MapHelper::findBeingsInRangeOf($this);
		foreach ($targets as $target)
		{
			$target->current_hp = max(0, $target->current_hp - self::BASE_DAMAGE);
		}
		*/
	}

}

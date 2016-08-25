<?php

namespace App\Models\Actions\Skills\BlackMagic;

use Illuminate\Database\Eloquent\Model;

use App\Models\Beings\Being;
use App\Models\Actions\Skill;

class FireBall extends Skill
{
	
	private $aoe         = FALSE;	
	
	CONST BASE_DAMAGE    = 5;
	CONST ELEMENT 		 = 'fire';

	public function applyTo(Being $target)
	{
		$damage = self::BASE_DAMAGE;
		if ($target->isDefending()) $damage = ceil($damage / 2);
		$target->current_hp = (int)max(0, $target->current_hp - $damage);
	}

}

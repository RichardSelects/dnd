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

	public $damage;

	public function applyTo(Being $target)
	{
		$this->damage = self::BASE_DAMAGE;
		if ($target->isDefending()) $this->damage = ceil($this->damage / 2);
		$target->current_hp = (int)max(0, $target->current_hp - $this->damage);
		return $this;
	}

}

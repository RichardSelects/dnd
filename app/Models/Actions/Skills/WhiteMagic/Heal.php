<?php

namespace App\Models\Actions\Skills\WhiteMagic;

use Illuminate\Database\Eloquent\Model;

use App\Models\Beings\Being;
use App\Models\Actions\Skill;

class Heal extends Skill
{
	
	CONST BASE_HEAL      = 5;
	private $aoe         = FALSE;

	public function applyTo(Being $target)
	{
		$hp = self::BASE_HEAL;
		$target->current_hp = min($target->max_hp, $target->current_hp + $hp);
	}

}

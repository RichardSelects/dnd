<?php

namespace App\Traits;

use App\Models\Character\Character;

trait Healer
{

	public function heal(Character $target)
	{
		$target->hp++;
	}

}
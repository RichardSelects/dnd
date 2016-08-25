<?php

namespace App\Models\Beings\Characters\Classes;

use Illuminate\Database\Eloquent\Model;

use App\Models\Beings\Character;

use App\Traits\Caster;
use App\Traits\Healer;
use App\Traits\Transforms;

class Druid extends Character
{
	
	use Caster, Healer, Transforms;

}

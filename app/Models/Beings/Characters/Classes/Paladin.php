<?php

namespace App\Models\Beings\Characters\Classes;

use Illuminate\Database\Eloquent\Model;

use App\Models\Beings\Character;

use App\Traits\Caster;
use App\Traits\Healer;

class Paladin extends Character
{

    use Caster, Healer;

	

}

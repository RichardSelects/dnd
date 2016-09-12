<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Beings\Character;
use App\Models\Beings\Characters\Classes\{Barbarian, Bard, Druid, Monk, Paladin, Ranger, Sorcerer, Warlock};
use App\Models\Actions\Skills\BlackMagic\{FireBall, IceBlast};
use App\Models\Actions\Skills\WhiteMagic\{Heal};


class GameController extends Controller
{

	public function index(Request $request)
	{
		$barbarian = Barbarian::find(1);
		$sorcerer = Sorcerer::find(2);

		
		if ($barbarian->d20()->passes(8))
		{
			$barbarian->defends();
			echo "{$barbarian->name} is defending against incoming attacks.<br />";
		}
		else
		{
			echo "{$barbarian->name} attempts to defend.<br />";
		}

		if ($sorcerer->d20()->passes(15))
		{
			$sorcerer->casts(new FireBall)->at($barbarian);
			echo "{$sorcerer->name} casts {$sorcerer->action->getName()} and hits {$barbarian->name} for {$sorcerer->action->damage} damage.";
		}
		else
		{
			echo "{$sorcerer->name} casts FireBall at {$barbarian->name} but misses. ({$sorcerer->getLastRoll()}/20)";
		}
		
		dd($barbarian);

	}

}
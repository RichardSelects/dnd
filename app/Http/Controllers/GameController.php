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

		//$sorcerer->casts(new FireBall)->at($barbarian);
		$barbarian->defends();
		//$barbarian->attacks($sorcerer);
		$sorcerer->casts(new FireBall)->at($barbarian);
		
		dd($barbarian);

	}

}
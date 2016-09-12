<?php

namespace App\Models\Beings;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Rollable;

class Being extends Model
{
    
	use Rollable;

	CONST BASE_DAMAGE    = 1;
	protected $guarded   = [ 'id', 'created_at', 'updated_at' ];
	protected $attacing  = FALSE;
	protected $defending = FALSE;

	public $action;

	public function attacks(Being $target)
	{
		$target->current_hp = max(0, $target->current_hp - self::BASE_DAMAGE);
	}

	public function defends()
	{
		$this->defending = TRUE;
	}

	public function isDefending()
	{
		return $this->defending;
	}

	public function movesTo($x, $y)
	{
		
	}

}

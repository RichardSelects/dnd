<?php

namespace App\Models\Beings;

use Illuminate\Database\Eloquent\Model;

class Being extends Model
{
    
	CONST BASE_DAMAGE    = 1;
	protected $guarded   = [ 'id', 'created_at', 'updated_at' ];
	protected $action;
	protected $attacing  = FALSE;
	protected $defending = FALSE;

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

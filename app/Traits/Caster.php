<?php

namespace App\Traits;

use App\Models\Beings\Being;
use App\Models\Actions\Skill;

trait Caster
{

	public function casts(Skill $skill)
	{
		$this->action = $skill;
		return $this;
	}

	public function at(Being $target)
	{
		if ( ! $this->action->aoe)
		{
			$this->action->applyTo($target);
		}
		return $this;
	}

	public function self()
	{
		if ( ! $this->action->aoe)
		{
			$this->action->applyTo($this);
		}
		return $this;
	}

	public function here()
	{
		$this->action->apply();
		return $this;
	}

}
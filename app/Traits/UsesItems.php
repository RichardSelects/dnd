<?php

namespace App\Traits;

use App\Models\Beings\Being;
use App\Models\Items\Item;

trait UsesItems
{

	public function uses(Item $item)
	{
		$this->item = $item;
		return $this;
	}

	public function on(Being $target)
	{
		return $this;
	}

}
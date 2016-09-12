<?php

namespace App\Traits;

trait Rollable
{

	private $result = 0;

	public function d4($dice = 1)
	{
		$this->result = $this->_roll($dice, 4);
		return $this;
	}

	public function d6($dice = 1)
	{
		$this->result = $this->_roll($dice, 6);	
		return $this;
	}

	public function d8($dice = 1)
	{
		$this->result = $this->_roll($dice, 8);
		return $this;
	}

	public function d10($dice = 1)
	{
		$this->result = $this->_roll($dice, 10);
		return $this;
	}

	public function d12($dice = 1)
	{
		$this->result = $this->_roll($dice, 12);
		return $this;
	}

	public function d20($dice = 1)
	{
		$this->result = $this->_roll($dice, 20);
		return $this;
	}

	public function passes($min = 10)
	{
		return ($this->result >= $min);
		
	}

	public function getLastRoll()
	{
		return $this->result;
	}

	private function _roll($times, $max)
	{
		$this->result = 0;
		while ($times)
		{
			$this->result += mt_rand(1, $max);
			$times--;
		}
		return $this->result;
	}

}
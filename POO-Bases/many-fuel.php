<?php

class Car {
	private float $tank;

	public function getTank() : float {
		return $this->tank;
	}
	public function setTank($tank) : self {
		$this->tank = $tank;
		return $this;
	}
	public function ride(float $distance) : self {
			$this->tank -= $distance/20;
			return $this;
	}
}

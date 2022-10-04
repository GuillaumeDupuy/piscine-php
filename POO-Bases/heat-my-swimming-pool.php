<?php

interface PoolTempsInterface {
	public function getActualTemp() : int;
	public function getLastDaysTemps() : array;
	public function setHeater(bool $bool) : void;
}

class PoolTemps implements PoolTempsInterface {
	private int $temp;
	private array $templists;
	public bool $isActive = false;

	public function __construct(int $temp, array $templists) {
		$this->temp = $temp;
		$this->templists = $templists;
	}

	public function getActualTemp() : int {
		return $this->temp;
	}
	public function getLastDaysTemps() : array {
		return $this->templists;
	}
	public function setHeater(bool $bool) : void {
		if ($bool) {
			$this->isActive = true;
		} else {
			$this->isActive = false;
		}
	}

	public function activateHeater() : void {
		if (array_sum($this->templists)/count($this->templists) >= 20) {
			$this->setHeater(true);
		} else {
			$this->setHeater(false);
		}
	}
}
<?php

class Magic {
	public string $card;

	public function __construct() {
		$this->card = 'As';
	}
	public function __destruct() {
		echo("Destruct");
	}
	public function __get($name) {
		echo("Get $name");
	}
	public function __set($name, $value) {
		echo("Set $name to $value");
	}
	public function __isset($name) {
		echo("Is $name set?");
	}
	public function __toString() {
		echo("ToString");
	}
}
<?php

abstract class AbstractGeometry {
	abstract public function area();
	abstract public function perimeter();
}

class Square extends AbstractGeometry {
	private int $lenght;

	public function __construct($lenght) {
		$this->lenght = $lenght;
	}

	public function area() {
		return $this->lenght ** 2;
	}
	public function perimeter() {
		return $this->lenght * 4;
	}
}

class Rectangle extends AbstractGeometry {
	private int $lenght;
	private int $width;

	public function __construct($lenght, $width) {
		$this->lenght = $lenght;
		$this->width = $width;
	}

	public function area() {
		return $this->lenght * $this->width;
	}
	public function perimeter() {
		return 2 * ($this->lenght + $this->width);
	}
}

class Triangle extends AbstractGeometry {
	private int $len1;
	private int $len2;
	private int $len3;

	public function __construct($len1, $len2, $len3) {
		$this->len1 = $len1;
		$this->len2 = $len2;
		$this->len3 = $len3;
	}

	public function area() {
		return "hihi ^^ UwU\nBakaaaaaa OwO";
	}
	public function perimeter() {
			return $this->len1 + $this->len2 + $this->len3;
	}
}
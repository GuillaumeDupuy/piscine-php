<?php

function f() : array {
	return array(
		"+" => static fn (int $nb1, int $nb2) => $nb1 + $nb2,
		"-" => static fn (int $nb1, int $nb2) => $nb1 - $nb2,
		"*" => static fn (int $nb1, int $nb2) => $nb1 * $nb2
	);
}
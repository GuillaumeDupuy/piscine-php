<?php

function factorial(int $nb) : mixed {
	if ($nb <= 1) {
		return 1;
	} else {
		return $nb * factorial($nb-1);
	}
}

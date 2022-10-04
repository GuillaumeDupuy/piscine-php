<?php

function dnaDiff(string $dna1, string $dna2) : int|bool {
	if (strlen($dna1) != strlen($dna2)) {return false;}
	$count = 0;
	for ($i = 0; $i < strlen($dna1); $i++) {
		if ($dna1[$i] != $dna2[$i]) {$count++;}
	}
	return $count;
}

<?php

function checkCircuits(int $nb) : array {
	$Debug = array(
		2 => 'Left arm',
		3 => 'Right arm',
		5 => 'Motherboard',
		7 => 'Processor',
		11 => 'Zip Defluxer', 
		13 => 'Motor'
	);
	$res = array();
	
	foreach (array_keys($Debug) as $k) {
		if ($nb % $k == 0) {
			array_push($res, $Debug[$k]);
		}
	}
	return $res;
}

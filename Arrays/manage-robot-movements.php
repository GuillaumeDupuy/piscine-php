<?php

function manageMovements(string $str) : array {
	$array = str_split($str);
	$res = array();
	$current = "";
	$last = '';
	foreach ($array as $letter) {
		switch ($letter) {
			case 'R': 
				$current = "RIGHT";
				if ($last == 'RIGHT') $current .= ' AGAIN';
				$last = "RIGHT";
				break;
			case 'L': 
				$current = "LEFT";
				if ($last == 'LEFT') $current .= ' AGAIN';
				$last = "LEFT";
				break;
			case 'F':
				$current = "FRONT";
				if ($last == 'FRONT') $current .= ' AGAIN';
				$last = "FRONT";
				break;
			case 'B': 
				$current = "BACKWARDS";
				if ($last == 'BACKWARDS') $current .= ' AGAIN';
				$last = "BACKWARDS";
				break;
		}
		array_push($res, $current);
	}
	return $res;
}

<?php

function explodeWords(string $str, string $sep = ' ', int $limit = PHP_INT_MAX) : array {
	$sentence = str_split($str);
	$result = array();
	$count = 1;
	if ($limit < 0) $neg = true; else $neg = false;
	$tab = "";
	foreach ($sentence as $char) {
		if ($char == $sep && ($count < $limit || $neg)) {
			array_push($result, $tab);
			$count++;
			$tab = "";
		} else {
			$tab .= $char;	
		}
	}
	if (!$neg) array_push($result, $tab);
	return $result;
}

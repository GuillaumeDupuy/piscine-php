<?php

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

function searchWord(array $board, string $search) : bool {
	$arr = str_split($search);
	foreach ($arr as $letter) {
		if (substr_count($search, $letter) > 1) return false;
	}
	return true;
} 
<?php

function joinWords(array $arr, string $sep = ' ') : string {
	$res = $arr[0];
	if ($res === null) {
		return 'string';
	}
	unset($arr[0]);
	foreach ($arr as $word) {
		$res .= $sep . $word;
	}
	return $res;
}

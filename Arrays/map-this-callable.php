<?php

function myArrayMap(callable|null $callback, array $array) : array {
	$result = array();
	if (!$callback) {
		return $array;
	}
	foreach ($array as $v) {
		array_push($result, $callback($v));
	}
	return $result;
	
}

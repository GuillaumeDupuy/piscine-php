<?php

function findIn(string $key, array $array) : string|bool {
	if (array_key_exists($key, $array)) {
		return $array[$key];
	}
	foreach ($array as $k => $v) {
		if (is_array($v)) {
			return findIn($key, $v);
		}
	}
	return false;
}

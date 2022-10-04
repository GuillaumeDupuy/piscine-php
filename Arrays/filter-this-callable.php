<?php

function myArrayFilter(array $array, ?callable $callback = null) : array {
	$result = array();
	foreach ($array as $key => $value) {
		if ($callback !== null) {
			if ($callback($value)) {
				$result[$key] = $value;
			}
		} else {
			if (!empty($value)) {
				$result[$key] = $value;
			}
		}
	}
	return $result;
}

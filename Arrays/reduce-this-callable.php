<?php

function myArrayReduce(array $arr, callable $callback, mixed $initial = null) {
	if (count($arr) == 0) {
		return $initial;
	}
	for ($i = 0; $i < count($arr); $i++) {
		if ($i == 0) {
			$res = $callback($initial, $arr[$i]);
		} else {
			$res = $callback($res, $arr[$i]);
		}
	}
	return $res;
}

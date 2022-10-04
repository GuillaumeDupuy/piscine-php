<?php

function reverse(array $arr) : array {
	$result = array();
	for ($i = count($arr)-1; $i >= 0 ; $i--) {
		array_push($result, $arr[$i]);
	}
	return $result;
}

function push(array $arr, string ...$str) : array {
	foreach ($str as $s) {
		$arr[count($arr)] = $s;
	}
	return $arr;
}

function sum(array $arr) : int {
	$res = 0;
	foreach ($arr as $nb) {
		$res += $nb;
	}
	return $res;
}

function arrayContains(array $arr, int|string|float $target) : int|bool {
	foreach ($arr as $value) {
		if ($value == $target) {
			return $target;
		}
	}
	return false;
}

function merge(array $arr1, array $arr2, array $arr3) : array {
	$result = array();
	$bigArr = array($arr1, $arr2, $arr3);
	foreach ($bigArr as $arr) {
		foreach ($arr as $a) {
			array_push($result, $a);
		}
	}
	return $result;
}
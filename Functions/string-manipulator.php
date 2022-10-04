<?php

function capsMe(string $str) : string {
	return strtoupper($str);
}

function lowerMe(string $str) : string {
	return strtolower($str);
}

function upperCaseFirst(string $str) : string {
	return ucwords($str);
}

function lowerCaseFirst(string $str) : string {
	$str = explode(' ', $str);
	$res = [];
	foreach ($str as $word) {
		array_push($res, lcfirst($word));
	}
	return join(' ', $res);
}

function removeBlankSpace(string $str) : string {
	return trim($str);
}

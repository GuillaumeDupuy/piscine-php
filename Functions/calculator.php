<?php

function calc(string $str) : int {
	eval("\$res = ".$str.";");
	return $res;
}

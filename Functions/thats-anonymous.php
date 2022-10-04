<?php

$today = function () : string {
	return "It is " . date('F d, Y');
};

$isLeapYear = function (int $year) : bool {
	if(date('L', mktime(0, 0, 0, 1, 1, $year)) == 1){
		return true;
	}
	return false;
};

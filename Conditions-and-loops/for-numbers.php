<?php
$arr = [];
for ($i = 2; $i <= 100; $i++) {
	$bool = true;
	for($x=2; $x<$i; $x++){
		if($i %$x ==0) $bool = false;
	}
	if ($bool) {
		array_push($arr, $i);
	}
}
echo(join(', ', $arr));
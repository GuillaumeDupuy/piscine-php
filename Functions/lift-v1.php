<?php

function getFloor(int $cFloor, int|null $rFloor, array $bFloor) : int|null {
	if ($rFloor != null) {
		return $rFloor;
	} else if (count($bFloor) > 0) {
		if ($cFloor <= $bFloor[0]) {
			return $bFloor[0];
		} elseif ($cFloor >= $bFloor[count($bFloor) - 1]) {
			return $bFloor[count($bFloor) - 1];
		} else {
			$closest = null;
   			foreach ($bFloor as $floor) {
     			if ($closest === null || abs($cFloor - $closest) > abs($floor - $cFloor)) {
         		$closest = $floor;
      			}
  			}
			return $closest;
		}
	}
	return $rFloor;
}

function getDirection(int $cFloor, int|null $rFloor, array $bFloor) : int {
	$Floor = getFloor($cFloor, $rFloor, $bFloor);
	if ($Floor > $cFloor) {
		return 1;
	} elseif ($Floor < $cFloor) {
		return -1;
	}
	return 0;
}

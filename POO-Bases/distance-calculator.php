<?php

class Geolocation {
	public static function fromGeoPoints(float $lat1, float $lon1, float $lat2, float $lon2) {
		$theta = $lon1 - $lon2;
  	$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  	$dist = acos($dist);
  	$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515;
		return round($miles * 1.609344, 2);
	}
}

$calc = Geolocation::fromGeoPoints(40.76, -73.984, 38.89, -77.032);
print_r($calc);
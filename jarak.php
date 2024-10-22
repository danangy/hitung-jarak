<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) {
 
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);
 
  if ($unit == "K") {
      return ($miles * 1609.34);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
  } else {
      return $miles;
  }
}
 
echo distance(-0.326636, 103.154260, -2.608350, 140.675299, "M") . " Mil<br>";
echo distance(6.634237, 110.74246, -6.6341867, 110.742386, "K") . " KM<br>";
?>


<button type="button" onclick="getLocation()">Aktifkan Lokasi</button>
 <p id="demo"></p>
<script>
var x = document.getElementById("demo");
 
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation tidak didukung oleh browser ini.";
  }
}
 
function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude + 
  "<br><b>Lokasi Telah Aktif</b>"; 
}


</script>     

<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) {
 
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);
 
  if ($unit == "K") {
      return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
  } else {
      return $miles;
  }
}
 
echo distance(-6.63428520217952, 110.74253226164373, -6.629163950435861, 110.73872851420451, "M") . " Miles<br>";
echo distance(-6.63428520217952, 110.74253226164373, -6.629163950435861, 110.73872851420451, "K") . " Kilo Meter<br>";
?>
<?php
session_start();
define("MAPS_HOST", "maps.google.com");
define("KEY", "YOURGOOGLEMAPSAPIKEY");  //Personal Google Maps API key
//Get address from which we will geocode the coordinates
$address=$_GET['address'];
if( $address!=NULL)
{
  // Initialize delay in geocode speed
  $delay = 0;
  $base_url = "http://" . MAPS_HOST . "/maps/geo?output=xml" . "&key=" . KEY;
  
  $request_url = $base_url . "&q=" . urlencode($address);
  $xml = simplexml_load_file($request_url) or die("URL not loading");
  
  $status = $xml->Response->Status->code;
    if (strcmp($status, "200") == 0)
  {
      // Successful geocode
      $geocode_pending = false;
      $coordinates = $xml->Response->Placemark->Point->coordinates;
      $coordinatesSplit = explode(",", $coordinates);
      // Format: Longitude, Latitude, Altitude
      $lat = $coordinatesSplit[1];
      $lng = $coordinatesSplit[0];
    
/*****************************************************************************************************/
//Showing the image
    $mapimage="http://maps.googleapis.com/maps/api/staticmap?center=".$lat.",".$lng."&zoom=15&size=350x300&markers=color:blue|".$lat.",".$lng."&sensor=false";
    print("<img src=$mapimage border='0'>");
  }
  else if (strcmp($status, "620") == 0)
  {
      // sent geocodes too fast
      $delay += 100000;
    }
  else {
      // failure to geocode
      $geocode_pending = false;
      echo "Address " . $address . " failed to be Geocoded.<br>Received status " . $status . "<br><br>Please check your address";
    }
  
  usleep($delay);
  
}
else
{
  print("<img src='images/location.png'><br>No address provided");
}
?>
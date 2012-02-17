<?php
 
 class Time {
 	
 	function CurrentTime( $Core )
 	{
		$Core -> loadObject( 'speak' );
		$Core -> loadObject( 'clock' );
		
		$speakObject = new speakObject( 'The current time in Amsterdam is:', 'The current time in Amsterdam is '.date('H:i a') );
		$clockObject = new clockObject( 'Europe/Amsterdam' );
				
 		
		return array( $speakObject -> getArr(), $clockObject -> getArr() );
 	}
 	
 	function CurrentTimeIn( $Core )
 	{
		$Core -> loadObject( 'speak' );
		$Core -> loadObject( 'clock' );
		
		$City = end( explode( ' ', $Core -> command ) );
		
		$JsonObject = @file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$City.'&region='. substr( $Core -> region, -2 ).'&sensor=false');
 		$Maps = @json_decode( $JsonObject );
 		
 		if( $Maps -> status == 'OK' )
 		{
 			$Latitude = $Maps->results[0]->geometry->location->lat;
 			$Longitude = $Maps->results[0]->geometry->location->lng;
 			$Name = $Maps->results[0]->address_components[0]->short_name;
 		
 			$GeoJson = file_get_contents( 'http://api.geonames.org/timezoneJSON?lat='.$Latitude.'&lng='.$Longitude.'&username=jimmykroon' );
 			$Geo = json_decode( $GeoJson );
 		
 			//var_dump( $Geo );
 			date_default_timezone_set( $Geo -> timezoneId );
		
			$speakObject = new speakObject( 'The current time in '.$Name.' is:', 'The current time in '.$Name.' is '.date('H:i a') );
			$clockObject = new clockObject( $Geo -> timezoneId, $Geo -> countryName, $Geo -> countryCode );	
 			
			return array( $speakObject -> getArr(), $clockObject -> getArr() );
		} else {
		
			$speakObject = new speakObject( 'Sorry, i cant find that location.' );
			
			return array( $speakObject -> getArr() );
		
		}
 	}
 	
 }
 
?>
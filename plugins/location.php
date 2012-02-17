<?php
 
 class Location {
 	
 	function CurrentLocation( $Core )
 	{
 	
		$Core -> loadObject( 'speak' );
		$Core -> loadObject( 'maps' );
		$Object = new speakObject( 'This is your location:' );
		$mapsObject = new mapsObject( $Core -> location['latitude'], $Core -> location['longitude'] );
 		
		return array( $Object -> getArr(), $mapsObject -> getArr() );
 	} 	
 	
 	function WhereIs( $Core )
 	{
 		$CityArr = explode( ' is ', $Core -> command );
 		$City = $CityArr[1];
 	
 		$JsonObject = @file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$City.'&region='. substr( $Core -> region, -2 ).'&sensor=false');
 		
 		$Maps = @json_decode( $JsonObject );
 		
 		$Core -> loadObject( 'speak' );
		$Core -> loadObject( 'maps' );
			
 		if( $Maps-> status == "OK" )
 		{
 			$Latitude = $Maps->results[0]->geometry->location->lat;
 			$Longitude = $Maps->results[0]->geometry->location->lng;
 			$Name = $Maps->results[0]->address_components[0]->short_name;
 			
			$Object = new speakObject( 'Here is ' . $Name . ':' );
			$mapsObject = new mapsObject( $Latitude, $Longitude, $Name, false );
			
			return array( $Object -> getArr(), $mapsObject -> getArr() );
 		} else {
 			$Object = new speakObject( 'Sorry, i cant find the location your looking for.' );
 			
			return array( $Object -> getArr() );
 		}
 		
 		
 		
 	}
 }
 
?>
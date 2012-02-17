<?php
 
 class Debug {
 	
 	function Show( $Core )
 	{
 		$Debug  = 'Dubug info:' . PHP_EOL;
 		$Debug .= 'Text: ' . $Core -> command . PHP_EOL;
 		$Debug .= 'Language Siri: ' . $Core -> language;
 	
		$Core -> loadObject( 'speak' );
		$Core -> loadObject( 'maps' );
		$Object = new speakObject( $Debug, 'This is the debug info' );
		$mapsObject = new mapsObject( $Core -> location['latitude'], $Core -> location['longitude'] );
 		
		return array( $Object -> getArr(), $mapsObject -> getArr() );
 	} 	
 }
 
?>
<?php
 
 class Search {
 	
 	function SearchQuery( $Core )
 	{
		$Core -> loadObject( 'search' );
		$Core -> loadObject( 'speak' );
		
		$Query = 'Google';
		
		$speakObject = new speakObject( 'Searching for '. $Query );
		$searchObject = new searchObject( $Query );
				
 		
		return array( $speakObject -> getArr(), $searchObject -> getArr() );
 	}
 	
 }
 
?>
<?php

 class clockObject extends defaultObject
 {
 	
 	function __construct( $Time = 'Europe/Amsterdam', $City = 'Amsterdam', $Country = 'NL' )
 	{
 	
 		$this -> object = array(
 			'group' => 'com.apple.ace.clock',
 			'class' => 'Snippet',
 			'properties' => array(
 				'clocks' => array( array(
 					'group' => 'com.apple.ace.clock',
 					'class' => 'Object',
 					'properties' => array(
 						'timezoneId' => $Time,
 						'cityName' => $City,
 						'countryCode' => $Country,
 						'countryName' => $City,
 						'unlocalizedCityName' => $City,
 						'unlocalizedCountryName' => $City,
 					),
 				) ),
 			)
 		);
 	}
 	
 	function __destruct()
 	{
 		
 	}
 	
 }

?>
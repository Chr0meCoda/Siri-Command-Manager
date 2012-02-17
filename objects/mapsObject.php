<?php

/*

{
	'class': 'MapItemSnippet',
  	'group': 'com.apple.ace.localsearch',
  	'properties': {
  		'items': [
  		{
  			'class': 'MapItem',
			'group': 'com.apple.ace.localsearch',
			'properties': {
				'detailType': 'BUSINESS_ITEM',
   				'label': 'Your current location',
            	'location': {
            		'class': 'Location',
                   	'group': 'com.apple.ace.system',
                  	'properties': {
                  		'city': '',
                 		'countryCode': '',
                   		'label': '',
                       	'latitude': 52.416326001364936,
                      	'longitude': 4.676973051106718,
                       	'postalCode': '',
                     	'stateCode': '',
                     	'street': ''
                     }
              	}
          	}
     	}],
		'userCurrentLocation': True
	}
}

*/

 class mapsObject extends defaultObject
 {
 	
 	function __construct( $Latitude = '', $Longitude = '', $Label = 'Your current location', $showUser = true )
 	{
 		
 		$this -> object = array(
 			'group' => 'com.apple.ace.localsearch',
 			'class' => 'MapItemSnippet',
 			'properties' => array(
 				'items' => array( array(
 					'group' => 'com.apple.ace.localsearch',
 					'class' => 'MapItem',
 					'properties' => array(
 						'detailType' => 'BUSINESS_ITEM',
 						'label' => $Label,
 						'location' => array(
 							'class' => 'Location',
 							'group' => 'com.apple.ace.system',
 							'properties' => array(
 								'city' => '',
 								'countryCode' => '',
 								'label' => '',
 								'latitude' => (float) $Latitude,
 								'longitude' => (float) $Longitude,
 								'postalCode' => '',
 								'stateCode' => '',
 								'street' => ''
 							)
 						),
 					),
 				) ),
 				'userCurrentLocation' => $showUser
 			)
 		);
 	}
 	
 	function __destruct()
 	{
 		
 	}
 	
 }

?>
<?php

 define( 'OPEN_SETTINGS', 'tweetbot:///retweets' );
 define( 'OPEN_LOCATION_SERVICES', 'prefs:root=LOCATION_SERVICES' );

 class buttonObject extends defaultObject
 {	
 	function __construct( $Text, $Url = false )
 	{
 		if( $Url == false )
 		{
 			$Url = OPEN_SETTINGS;
 		}
 	
 		$this -> object = array(
 			'group' => 'com.apple.ace.assistant',
 			'class' => 'Button',
 			'properties' => array(
 				'commands' => array( array(
					'class' => 'OpenLink',
					'group' => 'com.apple.ace.assistant',
					'properties' => array(
						'ref' => $Url
					),
				) ),
 				'text' => $Text
 			)
 		);
 	}
 	
 	function __destruct()
 	{
 		
 	}
 	
 }

?>
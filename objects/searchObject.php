<?php

 class searchObject extends defaultObject
 {
 	
 	function __construct( $Query )
 	{
 		
 		$this -> object = array(
 			'group' => 'com.apple.ace.websearch',
 			'class' => 'Search',
 			'properties' => array(
 				'query' => $Query,
 				'provider' => 'Default',
 				'targetAppId' => ''
 			)
 		);
 	}
 	
 	function __destruct()
 	{
 		
 	}
 	
 }

?>
<?php

 class speakObject extends defaultObject
 {
 	
 	function __construct( $Text, $SpeakText = false, $ListenAfter = false )
 	{
 		if( $SpeakText == false )
 		{
 			$SpeakText = $Text;
 		}
 	
 		$this -> object = array(
 			'group' => 'com.apple.ace.assistant',
 			'class' => 'AssistantUtteranceView',
 			'properties' => array(
 				'text' => $Text,
 				'listenAfterSpeaking' => $ListenAfter,
 				'speakableText' => $SpeakText,
 				'dialogIdentifier' => 'Misc#identt'
 			)
 		);
 	}
 	
 	function __destruct()
 	{
 		
 	}
 	
 }

?>
<?php 
 class Talk { 
 	function Hello( $Core )
 	{
		$Core -> loadObject( 'speak' );
		
		$Rand = rand( 1, 3 );
		
		switch( $Rand ) {
			case 1:
				$Object = new speakObject( 'Hello', false, true );
				break;
			case 2:
				$Object = new speakObject( 'Hi', false, true );
				break;
			case 3:
				$Object = new speakObject( 'Hey', false, true );
				break;
			default:
				$Object = new speakObject( 'Hello', false, true );
				break;
 		}
 		
		return array( $Object -> getArr() );
 	}
	function nothingfound( $Core )
 	{
		$Core -> loadObject( 'speak' );
		
		$Rand = rand( 1, 3 );
		
		switch( $Rand ) {
			case 1:
				$Object = new speakObject( 'Es tut mir leid');
				break;
			case 2:
				$Object = new speakObject( 'Nichts gefunden');
				break;
			case 3:
				$Object = new speakObject( 'Fail');
				break;
			default:
				$Object = new speakObject( 'Entschuldigung');
				break;
 		}
 		
		return array( $Object -> getArr() );
 	}
 	
 	function Howareyou( $Core )
 	{
		$Core -> loadObject( 'speak' );
		
		$Rand = rand( 1, 3 );
		
		switch( $Rand ) {
			case 1:
				$Object = new speakObject( 'Fine, thanks for asking!', false, true );
				break;
			case 2:
				$Object = new speakObject( 'I\'m good, thanks for asking!', false, true );
				break;
			case 3:
				$Object = new speakObject( 'I\'m still alive!', false, true );
				break;
			default:
				$Object = new speakObject( 'Fine, thanks for asking!', false, true );
				break;
 		}
 			
		return array( $Object -> getArr() );
 	}
 	
 	function Bye( $Core )
 	{
		$Core -> loadObject( 'speak' );
		
		$Rand = rand( 1, 3 );
		
		switch( $Rand ) {
			case 1:
				$Object = new speakObject( 'Talk to you later!' );
				break;
			case 2:
				$Object = new speakObject( 'See you' );
				break;
			case 3:
				$Object = new speakObject( 'Later aligator!' );
				break;
			default:
				$Object = new speakObject( 'Talk to you later!' );
				break;
 		}
 			
		return array( $Object -> getArr() );
 	}
 }/**/ 
?>
<?php

 include( 'core.siri.php' );

 $Core = new Core( );
 
 if( isset( $_GET['timezone'] ) )
 {
 	date_default_timezone_set( $_GET['timezone'] );
 }
 
 $Core -> setLocation( $_GET['latitude'], $_GET['longitude'] );
 $Core -> setLanguage( $_GET['language'] );
 $Core -> doAction( $_GET['text'] );
 
 $rm =  json_encode( $Core -> getResponse() );
 $rm = str_replace("test ","",$rm);
 echo $rm;
?>
<?php 
 return array( 
	'/\b'.'hello'.'\b/i' => 'Talk::Hello',
	'/\b'.'hi'.'\b/i' => 'Talk::Hello',
	'/\b'.'how are you'.'\b/i' => 'Talk::Howareyou',
	'/\b'.'goodbye'.'\b/i' => 'Talk::Bye',
	'/\b'.'bye'.'\b/i' => 'Talk::Bye',
	'/\b'.'current time'.'\b/i' => 'Time::CurrentTime',
	'/\b'.'current time in'.'\b/i' => 'Time::CurrentTimeIn',
	'/\b'.'what is the time in'.'\b/i' => 'Time::CurrentTimeIn',
	'/\b'.'where am i'.'\b/i' => 'Location::CurrentLocation',
	'/\b'.'where is'.'\b/i' => 'Location::WhereIs',
	'/\b'.'search'.'\b/i' => 'Search::SearchQuery',
	'/\b'.'search for'.'\b/i' => 'Search::SearchQuery',
	'/\b'.'nothingfound'.'\b/i' => 'Talk::nothingfound',
	'/\b'.'the book'.'\b/i' => 'Debug::Show'
 ); 
 ?>
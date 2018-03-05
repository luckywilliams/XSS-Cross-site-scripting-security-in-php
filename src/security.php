<?php
// Example : 

//in procedural programming

// define a function
function ProceduralXssSecuirty($string){
	
	// htmlspecialchars — Convert special characters and quotes to HTML entities
	$string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
	
	//return string
	return $string;
}


// Example : 

// in object oriented programming

// define a class first 
class OopSecurity{
	
	// define a function
	public function XssSecuirty($string){
		
		// htmlspecialchars — Convert special characters and quotes to HTML entities
		$string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
		
		//return string
		return $string;
		
	}
}
?>

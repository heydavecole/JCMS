<?php

	/* 
	JCMS ... JavaScript Object Notation (JSON) Content Management System
	// TEST
	*/

	class jcms {
		
		var $jcms_meta;
		
		function __construct(){
			
		}
		
		function getting_started(){
			echo "Hello World.";
		}
		
	}
	
	$jcms = new jcms;
	
	$jcms->getting_started();

?>
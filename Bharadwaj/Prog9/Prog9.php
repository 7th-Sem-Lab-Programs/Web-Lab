<?php

	header("Content-Type: text/plain");

	$statenames = "Mississippi Alabama Texas Massachusetts Kansas";
	print("States: ".$statenames."\n\n\n");
	$states = explode(' ',$statenames);
	$stateslist = [];
	$i = 0;

	foreach($states as $state){
		if(preg_match('/xas$/',$state)){
			print($state." ends with xas\n");
			$stateslist[$i++] = $state;
		}
	}

	foreach($states as $state){
		if(preg_match('/^k.*s$/i',$state)){
			print($state." begins with k and ends with s\n");
			$stateslist[$i++] = $state;
		}
	}

	foreach($states as $state){
		if(preg_match('/^M.*s$/',$state)){
			print($state." begins with M and ends with s\n");
			$stateslist[$i++] = $state;
		}
	}
	foreach($states as $state){
		if(preg_match('/a$/',$state)){
			print($state." ends with a\n");
			$stateslist[$i++] = $state;
		}
	}
	print("\n\nstateslist:\n");
	print_r($stateslist);
?>

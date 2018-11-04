<?php
	$states = "Mississipi Alabama Texas Massachusetts Kansas";
	$states = explode(" ", $states);
	$stateList = ["","","",""];
	foreach($states as $s){
		if(preg_match("/(xas$)/",$s))
			$stateList[0] = $s;
		if(preg_match("/^K.*s$/",$s))
			$stateList[1] = $s;
		if(preg_match("/^M.*s$/",$s))
			$stateList[2] = $s;
		if(preg_match("/a$/",$s))
			$stateList[3] = $s;
	}
	foreach($stateList as $s)
		echo $s."<br>";
?>

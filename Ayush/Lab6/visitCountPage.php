<body>
	<h1>Page Visit Count</h1>
	<?php
		$handle=fopen("count.txt","r");
		if(!handle){
			echo "Could Not Open File !!";
		}else {
			$counter = (int)fread($handle, 20);
			fclose($handle);
			echo "<h3>You are visitor number : <span style='color: red; font-weight: 300; font-size:20px;'>".$counter."</span> </h3>";
			$handle = fopen("count.txt","w");
			fwrite($handle, $counter+1);
			fclose($handle);
		}
	?>
</body>

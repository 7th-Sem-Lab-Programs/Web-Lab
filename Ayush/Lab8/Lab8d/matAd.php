<head>
	<title>Matrix Addition</title>
</head>
<body>
	<h1>Finding Sum of two Matrices</h1>
	<h3>Original Matrix is</h3>
	<?php
	$mat1 = array(array(1,2,3),array(4,5,6),array(7,8,9));
	$mat2 = array(array(9,8,7),array(6,5,4),array(3,2,1));
	for($i=0;$i<3;$i++){
		for($j=0;$j<3;$j++)
			echo $mat1[$i][$j]."&nbsp;&nbsp;";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		for($j=0;$j<3;$j++)
			echo $mat2[$i][$j]."&nbsp;&nbsp;";
		echo "<br>";
	}
	?>
	<h3>Sum is</h3>
	<?php
		for($i=0;$i<3;$i++){
			for($j=0;$j<3;$j++)
				echo $mat1[$i][$j]+$mat2[$i][$j]."&nbsp;&nbsp;";
			echo "<br>";
		}
	?>
</body>

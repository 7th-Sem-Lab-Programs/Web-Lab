<head>
	<title>Matrix Transpose</title>
</head>
<body>
	<h1>Finding Tranpose of a Matrix</h1>
	<h3>Original Matrix is</h3>
	<?php
		$mat = array(array(1,2,3),array(4,5,6),array(7,8,9));
		for($i=0;$i<3;$i++){
			for($j=0;$j<3;$j++)
				echo $mat[i][j]."&nbsp;&nbsp;";
			echo "<br>";
		}
	?>
	<h3>Transpose is</h3>
	<?php
		for($i=0;$i<3;$i++){
			for($j=0;$j<3;$j++)
				echo $mat[j][i]."&nbsp;&nbsp;";
			echo "<br>";
		}
	?>
</body>

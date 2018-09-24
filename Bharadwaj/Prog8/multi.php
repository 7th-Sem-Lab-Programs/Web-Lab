<html>
	<head>
		<title>
			Matrix multiplication
		</title>
	</head>
	<?php
			if(isset($_POST["submit"])){
				// echo "Here";
				$rows = explode("\n",$_POST["mat1"]);
				$mat1 = array();
				for($i=0;$i<sizeof($rows);$i++)
					$mat1[$i] = explode(' ',$rows[$i]);
				
				$rows = explode("\n",$_POST["mat2"]);
				$mat2 = array();
				for($i=0;$i<sizeof($rows);$i++)
					$mat2[$i] = explode(' ',$rows[$i]);

				// print_r($mat1);
				$res = array();
				// echo gettype($mat1[0][0]);
				for($i = 0;$i < sizeof($mat1);$i++)
					for($j = 0;$j < sizeof($mat2[0]);$j++){
						$res[$i][$j] = 0;
						for($k = 0;$k < sizeof($mat2);$k++)
							$res[$i][$j]+=(int)$mat1[$i][$k]*(int)$mat2[$k][$j];
					}
				// print_r($res);
			}
	?>
	<body>
		<form method="POST" action="#">
			<textarea name="mat1" required><?php if(isset($_POST["submit"])) echo $_POST["mat1"]?></textarea> *
			<textarea name="mat2" required><?php if(isset($_POST["submit"])) echo $_POST["mat2"]?></textarea><br>
			<button type="submit" name="submit" value="Add">Multiply</button>
		</form>
		<?php
			if(isset($_POST["submit"])){
				echo "Result: <br><br>";
				for($i = 0;$i < sizeof($res);$i++){
					for($j = 0;$j < sizeof($res[0]);$j++)
						echo $res[$i][$j]." ";
					echo "<br>";
				}
			}
		?>
	</body>
</html>

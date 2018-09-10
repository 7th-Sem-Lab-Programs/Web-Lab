<html>
	<head>
		<title>
			Matrix Addition
		</title>
	</head>
	<body>
		<?php
			if(isset($_POST['submit'])) {
				$content = "";

				$m1 = $_POST['mat1'];
				$rows1 = explode("\n", $m1);
				$mat1 = array();
				for($i = 0; $i < count($rows1); $i++) {
					$mat1[$i] = explode(" ", $rows1[$i]);
				}

				$m2 = $_POST['mat2'];
				$rows2 = explode("\n", $m2);
				$mat2 = array();
				for($i = 0; $i < count($rows2); $i++) {
					$mat2[$i] = explode(" ", $rows2[$i]);
				}

				// Check for matrix validity (same # of cols in each row)
				$valid = 0;
				$cols1 = count($mat1[0]);
				for($i = 1; $i < count($mat1); $i++) {
					if(count($mat1[$i]) != $cols1) {
						$valid = 1;
						$content = $content."<br>Matrix 1 is not valid.<br>";
					}
				}
				if($valid == 0) {
					$cols2 = count($mat2[0]);
					for($i = 1; $i < count($mat2); $i++) {
						if(count($mat2[$i]) != $cols2) {
							$valid = 1;
							$content = $content."<br>Matrix 2 is not valid.<br>";
						}
					}
				}

				if($valid == 0) {
					// Check equal dimensions
					if($cols1 != $cols2 || count($rows1) != count($rows2)) {
						$valid = 1;
					}
				}

				// Addition
				if($valid == 0) {
					$res = array();
					for($i = 0; $i < count($rows1); $i++) {
						$res[$i] = array();
						for($j = 0; $j < $cols1; $j++) {
							$res[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
						}
					}

					$content = $content."<br>";
					for($i = 0; $i < count($rows1); $i++) {
						for($j = 0; $j < $cols1; $j++) {
							$content = $content.$res[$i][$j]." ";
						}
						$content = $content."<br>";
					}
				}
			}
		?>
		<form method="POST" action="#">
			<textarea name="mat1" required><?php if(isset($_POST['submit'])) { for($i = 0; $i < count($rows1); $i++) { echo trim(preg_replace('/\s+/', ' ', $rows1[$i])); printf("\n"); } } ?></textarea> +
			<textarea name="mat2" required><?php if(isset($_POST['submit'])) { for($i = 0; $i < count($rows2); $i++) { echo trim(preg_replace('/\s+/', ' ', $rows2[$i])); printf("\n"); } } ?></textarea><br>
			<button type="submit" name="submit" value="Add">Add</button>
		</form>
		<?php
			echo $content;
		?>
	</body>
</html>

<html>
    <head>
        <title> Matrix Transpose </title>
    </head>
    <body>
        <?php
            if(isset($_POST["submit"])) {
                $content = "";

				$m = $_POST['mat'];
				$rows = explode("\n", $m);
				$mat = array();
				for($i = 0; $i < count($rows); $i++) {
					$mat[$i] = explode(" ", $rows[$i]);
				}

				// Check for matrix validity (same # of cols in each row)
				$valid = 0;
				$cols = count($mat[0]);
				for($i = 1; $i < count($mat); $i++) {
					if(count($mat[$i]) != $cols) {
						$valid = 1;
						$content = $content."<br>Matrix is not valid.<br>";
					}
				}

                // Transpose
				if($valid == 0) {
					$res = array();
					for($j = 0; $j < $cols; $j++) {
						$res[$j] = array();
						for($i = 0; $i < count($rows); $i++) {
							$res[$j][$i] = $mat[$i][$j];
						}
					}

					$content = $content."<br>";
					for($i = 0; $i < $cols; $i++) {
						for($j = 0; $j < count($rows); $j++) {
							$content = $content.$res[$i][$j]." ";
						}
						$content = $content."<br>";
					}
				}
            }
        ?>
        <form method="POST" action="#">
            <textarea name="mat" required><?php if(isset($_POST['submit'])) { for($i = 0; $i < count($rows); $i++) { echo trim(preg_replace('/\s+/', ' ', $rows[$i])); if($i != count($rows) - 1) { printf("\n"); } } } ?></textarea><br>
            <button type="submit" name="submit" value="Transpose">Transpose</button>
        </form>
        <?php
            if(isset($_POST['submit'])) {
                echo $content;
            }
        ?>
    </body>
</html>

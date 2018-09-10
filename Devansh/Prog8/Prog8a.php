<html>
	<head>
		<title> Program 8a </title>
	</head>
	<body>
		<?php
			if(isset($_POST["op"])) {
				$n1 = $_POST["num1"];
				$n2 = $_POST["num2"];
				$op = $_POST["op"];
				switch ($op) {
					case "+":
						$res = $n1 + $n2;
					break;
					case "-":
						$res = $n1 - $n2;
					break;
					case "*":
						$res = $n1 * $n2;
					break;
					case "/":
						if($n2 == "0") {
							$res = "Divide by zero error.";
						} else {	
							$res = $n1 / $n2;
						}
					default:
						$res = "Invalid operator.";
					break;
				}
			}
		?>
		<form id="main" method="POST" action="#">
			1st Number : <input type="number" name="num1" id="n1" value="<?php if(isset($_POST["op"])) { echo $n1; } ?>" required><br><br>
			2nd Number : <input type="number" name="num2" id="n2" value="<?php if(isset($_POST["op"])) { echo $n2; } ?>" required><br><br>
			<input type="submit" name="op" value="+">
			<input type="submit" name="op" value="-">
			<input type="submit" name="op" value="*">
			<input type="submit" name="op" value="/">
		</form>
		<br>
		<?php
			if(isset($_POST["op"])) {
				echo $n1." ".$op." ".$n2." = ".$res;
			}
		?>
	</body>
</html>

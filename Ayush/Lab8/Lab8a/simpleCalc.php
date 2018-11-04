<html>
	<head>
		<title>Simple Calculator</title>
	</head>
	<body>
		<h1>Simple Calculator</h1>
		<form method="post">
			Enter first number  : <input type="number" name="n1"/><br>
			Enter second number : <input type="number" name="n2"/><br>
			<input type="submit" value="+" name="op"/>
			<input type="submit" value="/" name="op"/>
			<input type="submit" value="-" name="op"/>
			<input type="submit" value="*" name="op"/><br>
			<h2 style="color: red;">Result</h2>
		</form>
		<?php
				$num1=$_POST['n1'];
				$num2=$_POST['n2'];
				$oprnd=$_POST['op'];

				if($oprnd=="+")
					$res=$num1+$num2;
				else if($oprnd=="-")
					$res=$num1-$num2;
				else if($oprnd=="*")
					$res=$num1*$txt2;
				else if($oprnd=="/")
					$res=$num1/$num2;
				echo $res;
		?>
	</body>
</html>

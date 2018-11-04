<html>
	<head>
		<title>Digital Clock</title>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content="1">
	</head>
	<body style="font-family: 'arial';">
		<h1>Display current Date and Time</h1>
		<h2>
			<?php
				echo "Today's date is <span style='color: tomato;'>".date("d-M-Y");
				echo "</span> and time is <span style='color: red;'>".date("h:i:s a")."</span>";
			?>
		</h2>
	</body>
</html>

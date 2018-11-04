<html>
<head>

	<title> Database Program </title>
</head>
<body>
	
<form action="web10.php" method="post" autocomplete="off">
		<input name="name" placeholder="Name" required /><br />
		<input name="usn" placeholder="USN" required/>	<br />
		<input name="branch" placeholder="Branch" required/><br />
		<input name="sem" placeholder="Semester" required/><br />
		<button type="submit">Add</button>

	</form>

<?php
$dbhost = 'localhost';
	
	$dbname='WebLab';

	$dbuser = 'root';

	$dbpass = 'p@t@n@hi';
	
$sql = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	
$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	try {
	
	if(count($_POST) != 0)
 {
	$stmt = $sql->prepare("INSERT INTO STUDENT VALUES(?,?,?,?)");

	$stmt->execute(array($_POST["name"],$_POST["usn"],$_POST["sem"],$_POST["branch"]));
	
	}

	}

	catch(Exception $exp) 
{
		echo "Can't Insert USN Clash<br><br>";
	}

	$result = $sql->query("SELECT * FROM STUDENT");

	$rows = $result->fetchAll();
	
	
	echo	"Unsorted<br>";

	echo "<table><tr><th>Name</th><th>USN</th><th>Sem</th><th>Branch</th></tr>";

	foreach($rows as $row) 
{
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
	}

	echo "</table>";

	
for($i = 0; $i < count($rows) - 1; $i++)
 {
		$minIndex = $i;

		for($j = $i+1; $j < count($rows); $j++)
 {
//		echo "Here".$rows[$j][0]."Lol";
		if(strcmp($rows[$j][0], $rows[$minIndex][0]) < 0) 
{
				$minIndex = $j;
				//echo "Here".rows[$j]["name"];
		}
		}

		$temp = $rows[$i];

		$rows[$i] = $rows[$minIndex];
	
	$rows[$minIndex] = $temp;
	}


	echo	"<br/>Sorted<br>";

	echo "<table><tr><th>Name</th><th>USN</th><th>Sem</th><th>Branch</th></tr>";

	foreach($rows as $row) {
	
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
	
}
	
echo "</table>";


	$sql = null;
?>


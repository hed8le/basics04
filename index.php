<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	
	<?php  
		/******* 1.Variablen ***************************/
		$a=4.2;
		$b="Mio";
		$c="Kosten: " . $a . " " . $b;
		echo $c;
		echo "<br>";
		echo strtolower($c);
		echo "<br>";

		/******* 2.Arrays ***************************/
		$d=array(1,2,3,"Costs",5);
		print_r($d);
		echo "<br>";
		$e=[6,7,8,"4 Mio",9];
		print_r($e);
		echo "<p>";
		foreach ($d as $tmp) { echo "Wert: $tmp<br>"; }
		$f=count($e);
		echo "<p>";
		echo "Anzahl Array-Elemente: $f<br>";
		$e[]=11;
		echo "Anzahl Array-Elemente: " . zaehleElemente($e);
		echo "<br>";
		ausgabeElemente($d);
	?> 
		<h4>$_GET-Ausgabe: Schreibe die Daten in die URL</h4>
	<?php
		print_r($_GET);
		echo "<br>";
		$g=$_GET["wert"];
		print_r($g);
		echo "<br>";

		/******* 3.Verzweigungen ***************************/
		if(is_array($d)){
			print('$d ist ein Array.');
		} else {
			echo "Kein Array.<br>";
		}
		if(empty($d)){
			echo '0';
		} else {
			echo 'Variable ist nicht Null';
		}
		unset($d[2]);
		print_r($d);

		/******* 5.Funktionen ***************************/
		function zaehleElemente($anzahl){
			$f=count($anzahl);
			return $f;
		}

		function ausgabeElemente($arr){
			echo "Anzahl Array-Elemente: " . zaehleElemente($arr) . "<br>";
		}

		/******* 6.Klassen und Objekte ***************************/
		class Person{
			public $vorname="Bart";
			public $nachname="Simpson";
			public function ausgabeName(){
				echo "<br>Name: " . $this->vorname . " " . $this->nachname;
			}
			public function setVorname($first){
				$this->vorname=$first;
			}
		}
		$i=new Person();
		$i->ausgabeName();
		$i->setVorname("Homer");
		$i->ausgabeName();
	?> 
		<!-- ******* 7.Form Data Processing *************************** -->
		<h4>Form Data Processing</h4>
		<form action="#" method="get">
			<label for="vn">Vorname:</label>
			<input type="text" name="vorn" size="30" id="vn">
		</form>
		<strong>Ausgabe wird von PHP erzeugt:</strong>
	<?php
			echo $_GET["vorn"] . "<br>";
		
		/******* 8.PDO ***************************/
			$server='mysql:dbname=basics;host=localhost';
			$user='root';
			$pw='root';
			$dbh=new PDO($server,$user,$pw);
			$n=$_GET["vorn"];
			$sql="INSERT INTO testdata VALUES ($n)";
			echo $sql;//Test SQL-Statement
			$dbh->exec($sql);
	?>

</body>

</html>
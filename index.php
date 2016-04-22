<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Weasel Program</title>
	<style type="text/css">
		body {
    		background-color: black;
    		color: green;
    		font-family: "Courier";
	   		padding: 30px;
	   		margin-right: 30px;

			}
		.terminated {
			text-decoration: blink;
		}
	</style>
</head>
<body>
<p>This is a script I wrote based on Richard Dawkins' <a href="https://en.wikipedia.org/wiki/Weasel_program" target="_blank">weasel program</a> from the book The Blind Watchmaker. The script demonstrates how evolution works in nature.</p>

<p>First, you generate a random string of letters. That represents the processes of random mutation. Then, we compare our random string to a quote, in this case one from Interview With The Vampire. If our random mutations are fit for their environment (you know, if the random letters match our quote), those letters get to pass down their genes to the next generation (aka the letters fuck).</p>

<p>How many generations did it take natural selection to come up with the quote "Methinks a mortal doth approach"?</p>


<?php
$GLOBALS['success'] = array();
$string = array('m', 'e', 't','h', 'i', 'n', 'k', 's', ' ', 'a', ' ', 'm', 'o', 'r', 't', 'a', 'l', ' ', 'd', 'o', 't', 'h', ' ', 'a', 'p', 'p', 'r', 'o', 'a', 'c','h');



//echo $string[0];
//echo $alphabet[rand(0, 27)];

function createRandom() {
	$alphabet = array(' ', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
	$i = 1;
	$result = array();
	while ( $i < 32) {
	$result[] = $alphabet[rand(0, 27)];
	$i++;
	}
	return $result;
}

function createRandomLetter() {
	$alphabet = array(' ', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
	echo $alphabet[rand(0, 27)];
}

function compareResult($string) {
	
	$success = array();
	$result = array();
	$i = 1;

	while ($i <= 300) {
		$result = createRandom();
		foreach ($result as $k => $v) {
			//if a given random value matches the value in the same place in $string, add it to the $success array
			if ($v == $string[$k]) {
				$success[$k] = strtoupper($v);
			} 
		} 

	echo "<br>";
	echo "Generation " . $i .": ";
	ksort($success);
		$j = 0;
		while ($j <= 30) {
			//$result = createRandom();
			if (!$success[$j]) {
				$success[$j] = "*"; //originally I had this equal to createRandomLetter(), but the array was never in the right order!
			}
			ksort($success);
			$j++;
		}
		ksort($success);
		$happy = implode("", $success);
		foreach ($success as $s) {
			if ($s == "*") {
				echo createRandomLetter();
			} else {
				echo $s;
			}
			
		}
		//echo "<br>";
		//print_r($success);
	$i++;
	echo "<br><br>";
	if ($happy == "METHINKS A MORTAL DOTH APPROACH") {
		echo 'C:\Windows\System32>success';
		exit;
	}
	}
	

	return $success;
}


$success = compareResult($string);
echo '<div class="terminated" style="text-decoration: blink">C:\Windows\System32>Process terminated.</div>';
/*
if (compareResult($string) !== $string) {
	compareResult($string);
}










echo "<br>";
echo "<br>";
if (count($success) > 0) {
	print_r($success);
}

echo "<br>";
echo "<br>";
/*
echo "How many rolls of dice does it take to get the number 6?<br><br>";



$y = 0;
while ($x !==6) {
	$x = rand(0, 6);
	$y++;
	echo "Roll #" . $y . ":  ";
	echo $x . "<br>";
}

echo "<br>";
echo "<br>";

echo "It takes " . $y . " roll";

if ($y > 1) {
	echo "s";
}

echo ".";
*/

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Voina_i_mir</title>
	<link rel="stylesheet" href="style2657.css">
</head>

<body>
<div class=gallery>
    <img src="imges1.jpg" width="250px" height="300px" alt=""><br>
    <img src="images2.jpg" width="250px" height="300px" lt=""><br>
    <img src="images3.jpg" width="250px" height="300px" alt=""><br>
    
    </div>
<div class="list">
<h1>Роман Война и мир<br><i>Толстой Л.Н.<i></h1>
	<?php
	$ret = file_get_contents('voina-i-mir (1).txt');

	echo "<h2>Количество слов сударь (без склонений) в романе </h2>";
	preg_match_all('/\bсударь\b/iu', $ret, $str);


	foreach ($str[0] as $key => $row) {
		echo ($key + 1)  . '.' . $row;
		if ($key < count($str[0]) - 1) {
			echo "\n<br>";
		}
	}

	echo "<br><b>Итого:" .count($str[0]). "<b><br>";

	echo "<h2>Варианты слов сударь (в склонении) в романе </h2>";

	preg_match_all('/\bсудар([^ь]*?)\b/iu', $ret, $str1);
	foreach ($str1[0] as $key => $row) {
		echo ($key + 1)  . '.' . $row;
		if ($key < count($str1[0]) - 1) {
			echo "\n<br>";
		}
	}
	echo "<br><b>Итого:  " . count($str1[0]) . "<b>";
	?>
</div>
<div class=gallery_right>
    <img src="images4.jpg" width="400px" height="250px" alt=""><br>
    <img src="images5.jpg" width="400px" height="300px" alt=""><br>
	<img src="10_1.jpg" width="400px" height="400px" alt=""><br>
    </div>
</body>

</html>
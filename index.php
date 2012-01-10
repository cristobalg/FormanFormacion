<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Funciona</h1>
		<?php
		
		// comento
				
		
			echo "hola mundo y adios mundo<br>";
		?>
		<?php		
		$i = 0;
		if ($i++== 0) {
			echo "con postdecremento \$i=$i <br>";
		}
		$i = 0;
		if (++$i== 1) {
			echo "con predecremento \$i=$i <br>";
		}
		while ($i < 5) {
			echo "$i <br>";
			$i = ++$i;
		}
		$last_name = array("Smith", "Jones", "Sanchez", "Green");
		foreach ($last_name as $individual) {
			print "Last Name = $individual<br>";
		}
		
		$wk_temp = array(
			'Sunday' => 13,
			'Monday' => 12,
			'Tuesday' => 11,
			'Wednesday' => 13,
			'Thursday' => 15,
			'Friday' => 17,
			'Saturday' => 9);
		$wk_avg = 0;
		foreach($wk_temp as $day => $temp) {
			echo "$day = $temp<br>";
			$wk_avg = $wk_avg + $temp;
		}
		$wk_avg = $wk_avg / 7;
		echo "The average temperature for the week was $wk_avg";
		
		
		
		function hola($nombre="Mundo") {
			echo "Hola $nombre <br>";
		}
		
		hola(); // imprime por pantalla hola mundo
		hola();
		hola();
		hola("paco");
		
		$sentence = "Mary had a little lamb whose fleece was white as snow.";
		$word_count = str_word_count($sentence);
		echo "<p>The sentence '$sentence' contains $word_count words</p>";
		
		$palabras = explode(" ",$sentence);
		$num_pal = count($palabras);
		print "<p>The sentence '$sentence' contains $num_pal words</p>";	
		print "<p>The sentence '$sentence' contains ".count($palabras). " words</p>";	
		
		$palabras = strtok($sentence," \n\t");
		$num_pal = count($palabras);
		print "<p>The sentence '$sentence' contains ".count($palabras). " words</p>";	
		
		$string = "This is\tan example\nstring";
		$tok = strtok($string, " \n\t");
		count($tok);		
		while ($tok !== false) {
			echo "Word=$tok<br />";
			$tok = strtok(" \n\t");
		}
		
		$long = strlen($sentence);
		echo "longitud de la cadena $long";
		$num_palabras = 1;
		for ($i=0; $i<$long; $i++) {
			if ($sentence[$i]==" ") {
				$num_palabras++;
			}
		}
		print "<p>The sentence '$sentence' contains $num_palabras words</p>";	
		
		
		
		
		
		
		
		
		
		
?>
	</body>
</html>
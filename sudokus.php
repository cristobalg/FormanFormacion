<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Sudokus</h1>

		<?php		
		$sudoku = array (array(1,2,3,4), array(4,3,2,1), array(3,1,4,2), array(2,4,1,3));
		
		// imprime sudoku
		function ImprimeSudoku ($a) {
			foreach ($a as $linea) {
				foreach ($linea as $caracter) {
					echo $caracter;
				}
				echo "<br>";
			}			
		}
	
		function CheckLine($a) {
		
			$correcto = true;
			$enlalista = array();
			foreach ($a as $valor) {
				if (in_array($valor, $enlalista)) {
					$correcto = false;
				} else {
					$enlalista[]= $valor;
				}
			}
			echo "la linea es: ".$correcto."<br>";
			return $correcto;
		}
	
		ImprimeSudoku($sudoku);
		
		//Echo CheckLine($sudoku[0]);
		//Echo CheckLine($sudoku[1]);
		//Echo CheckLine($sudoku[2]);
		//Echo CheckLine($sudoku[3]);		
				
		$columna= array(array(),array(),array(),array());
		foreach ($sudoku as $linea) {
			print_r($linea);
			CheckLine($linea); // chequeo lineas
			$i = 0;
			foreach ($linea as $indice => $numero) {
				array_push($columna[$i],$numero);
				echo $indice;				
				$i++;			
			}			
		}
		foreach ($columna as $micolumna) {
			print_r($micolumna);
			CheckLine($micolumna);
		}

		CheckCuadro($cuadro); // chequeo cuadro
		?>
	</body>
</html>
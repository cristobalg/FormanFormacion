<?php  

	// hagho un comentario 
	
	// segundo comentario
	function foo() {
		$num_args = func_num_args();
		echo "Número de argumentos: $num_args<br />\n";
		if ($num_args >= 2) {
		echo "El segundo argumento es: " . func_get_arg(1) . "<br />\n";
		}
	}
	echo "probando funcion numero de argumentos <br>";
	foo (1, 2, 3);

	// 
	

	mysql_free_result($result);
	mysql_close($connection);
	
?>  
     
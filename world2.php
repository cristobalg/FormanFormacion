<?php  
	/*
	$connection = mysql_connect('localhost', 'root', '123') or die ('Imposible conectar al servidor Server!');
	mysql_select_db('world') or die ('No ha sido posible seleccionar la BBDD');
	$query = 'SELECT name, population FROM Country';
	$result = mysql_query($query) or die ('Error en la consulta: $query. ' . mysql_error());
	if (mysql_num_rows($result) > 0) {
		while($row = mysql_fetch_assoc($result)) {
			echo $row['name'] . " - " . $row['population'] . "<br>";
		}
	} Else {
	echo 'No rows found!';
	}
	mysql_free_result($result);
	mysql_close($connection);
	*/
	$connection = mysql_connect('localhost', 'root', '123') or die ('Imposible conectar al servidor Server!');
	mysql_select_db('world') or die ('No ha sido posible seleccionar la BBDD');
	$query = 'SELECT name, population FROM Country';
	$result = mysql_query($query) or die ('Error en la consulta: $query. ' . mysql_error());
	if (mysql_num_rows($result) > 0) {
		foreach (mysql_fetch_assoc($result) as $row) {		
			echo $row ['name'] . " - " . $row['population'] . "<br>";
		}
	} Else {
	echo 'No rows found!';
	}
	mysql_free_result($result);
	mysql_close($connection);
	
?>  
     
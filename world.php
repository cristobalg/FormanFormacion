<html>
<head>
<title>PHP and MySQL</title>
</head>
<body>
<a name="top"><h1>Cities of the World</h1></a>
<a href="http://dev.mysql.com/doc/"><h3>MySQL Documentation</h3></a>

	<?php  
		require ("security.php");
		$connection = mysql_connect('localhost', 'root', '123')
			or die ('Imposible conectar al servidor Server!');
		mysql_select_db('world')
			or die ('No ha sido posible seleccionar la BBDD');
		$query = 'SELECT name, population, code FROM Country';
		$result = mysql_query($query) 
			or die ('Error en la consulta: $query. ' . mysql_error());
			
		if (mysql_num_rows($result) > 0) {
			while($row = mysql_fetch_assoc($result)) {
				echo $row['name'] . " - " . $row['population'] . "  - " . $row['code'] . "<br>";
			}
		} Else {
		echo 'No rows found!';
		}
		mysql_free_result($result);
		mysql_close($connection);
	?>  
     
	<a href="#top">Go to the top of the page</a>
</body>
</html>
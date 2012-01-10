<?php
session_start();

print_r($_POST);


if (!(empty($_POST["access_requested"])) AND $_POST["access_requested"]=="yes") {
	
	# Create Connection to MySQL server
	$connection = mysql_connect('localhost', 'root', '123')
			or die ('Imposible conectar al servidor Server!');
	mysql_select_db('world')
			or die ('No ha sido posible seleccionar la BBDD');			
	/* Exit with error message if there is a problem */
	
	$user = $_POST["uname"];
	$pword = $_POST["pword"];
	
	# Send query to MySQL server
	$query = "SELECT email FROM customers WHERE email='$user' AND passwd = SHA('$pword');";
	$result = mysql_query($query) 
			or die ('Error en la consulta: $query. ' . mysql_error());
	/* Exit with error message if problem with query execution */
	if (mysql_num_rows($result) > 0) {
		$row = mysql_fetch_assoc($result);
		if ($row["email"]=="$user") {
			$_SESSION["Approved"]="Yes";
		} else {
			echo "<p>Usuario o contraseña incorrectos, intentalo otra vez</p>";
			$_SESSION["Approved"]="No";
		}
	} Else {
		echo "<p>Usuario o contraseña incorrectos, intentalo otra vez</p>";
		$_SESSION["Approved"]="No";
	}
	
	# Disconnect from MySQL server
	mysql_free_result($result);
	mysql_close($connection);
}

if(!(empty($_POST["logout"])) AND $_POST["logout"]=="yes") {
	$_SESSION = array();
	// Unset all cookie variables
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),'', time()-48000,'/');
	}
	echo "Desconectado!";
	exit;
}
if(!(empty($_SESSION)) AND $_SESSION["Approved"]=="Yes") {
	echo "Loggeado con exito";
	$req_URL = $_SERVER["REQUEST_URI"];
	echo '<form action="'.$req_URL.'" method="POST">';
	echo '<input type="hidden" name="logout" value="yes">';
	echo '<p><input type="submit" value="Desconectar"></p></form>';
	print_r($_COOKIE);
}else {
	$req_URL = $_SERVER["REQUEST_URI"];
	echo '<form action="'.$req_URL.'" method="POST">';
	echo '<p>Username: <input type="text" name="uname"></p>';
	echo '<p>Password: <input type="password" name="pword"></p>';
	echo '<input type="hidden" name="access_requested" value="yes">';
	echo '<p><input type="submit" value="Login"></p></form>';
	exit;
}

?>
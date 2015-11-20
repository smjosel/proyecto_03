<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Procedimiento insertar usuarios</title>
	</head>
	<body>
		<?php
			//realizamos la conexión con mysql
			$con = mysqli_connect('mysql.hostinger.es','u114265056_root','1234567890','u114265056_intra');
			$sql = "INSERT INTO users (nomUser, mail, telf, password, privilegios) VALUES ('$_REQUEST[nom]', '$_REQUEST[mail]', $_REQUEST[telf], '$_REQUEST[pass]', '$_REQUEST[privilegios]')";

			//echo $sql;

			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);

			header("location: paginausuario_registro.php")
		?>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Procedimiento mdificar usuarios</title>
	</head>
	<body>
		<?php
			//realizamos la conexión con mysql
			$con = mysqli_connect('mysql.hostinger.es','u114265056_root','1234567890','u114265056_intra');
			$sql = "UPDATE users SET nomUser='$_REQUEST[nom]', telf=$_REQUEST[telf], password='$_REQUEST[pass]', privilegios='$_REQUEST[privilegios]' WHERE idUser=$_REQUEST[id]";

			//echo $sql;

			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);

			header("location: paginausuario_registro.php")
		?>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios con datos en BD</title>
	</head>
	<body>
		<?php
			//realizamos la conexión con mysql
			$con = mysqli_connect('localhost', 'root', '', 'bd_intranet');

			//esta consulta devuelve todos los datos del producto cuyo campo clave (pro_id) es igual a la id que nos llega por la barra de direcciones
			$sql = "SELECT * FROM users WHERE idUser=$_REQUEST[id]";

			//mostramos la consulta para ver por pantalla si es lo que esperábamos o no
			//echo "$sql<br/>";

			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);

			if(mysqli_num_rows($datos)==1){
				$usuario=mysqli_fetch_array($datos);
				if($usuario['user_v']==1){
					$sql = "UPDATE users SET user_v=0 WHERE idUser=$_REQUEST[id]";
				} else {
					$sql = "UPDATE users SET user_v=1 WHERE idUser=$_REQUEST[id]";
				}
			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);

			} else {
				echo "No hay usuarios que modificar";
			}
						
			if(mysqli_affected_rows($con)==1){
				header("location:paginausuario_registro.php");
				//echo "Producto con id=$_REQUEST[id] eliminado!";
			} elseif(mysqli_affected_rows($con)==0){
				echo "No se ha modificado ningún usuario por que no existe en la BD";
			} else {
				echo "Ha pasado algo raro";
			}

			//cerramos la conexión con la base de datos
			mysqli_close($con);
		?>
		<br/><br/>
		<a href="paginausuario_registro.php">Volver</a>
	</body>
</html>
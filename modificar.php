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

			//lanzamos la sentencia sql que devuelve el producto en cuestión
			$datos = mysqli_query($con, $sql);
			if(mysqli_num_rows($datos)>0){
				$usuario=mysqli_fetch_array($datos);
				?>
				<form name="formulario1" action="modificar.proc.php" method="get">
				<input type="hidden" name="id" value="<?php echo $usuario['idUser']; ?>">
				Usuario:<br/>
				<input type="text" name="nom" size="20" maxlength="50" value="<?php echo $usuario['nomUser']; ?>"><br/>
				Teléfono:<br/>
				<input type="text" name="telf" size="20" maxlength="12" value="<?php echo $usuario['telf']; ?>"><br/>
				Password:<br/>
				<input type="text" name="pass" size="20" maxlength="12" value="<?php echo $usuario['password']; ?>"><br/>
				Privilegios:<br/>
				<select name="privilegios">
				<?php
					if($usuario['privilegios']==admin){
				?>
						<option value="admin" selected="selected">Administrador</option>
			       		<option value="member">Usuario</option>
			    <?php
					}else{
				?>
						<option value="admin">Administrador</option>
			       		<option value="member" selected="selected">Usuario</option>
				<?php
					}
				?>
				</select><br/><br/>
				<input type="submit" value="Guardar">
				</form>
				<?php
			} else {
				echo "Usuario con id=$_REQUEST[id] no encontrado!";
			}
			//cerramos la conexión con la base de datos
			mysqli_close($con);
		?>
		<br/><br/>
		<a href="paginausuario_registro.php">Volver</a>
	</body>
</html>
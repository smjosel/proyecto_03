<link rel="stylesheet" href="css/tablareservas.css">
<!DOCTYPE html>
<html>
	<head>
		<title>  </title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		//Conexion a la BBDD.
		$con=mysqli_connect('localhost','root','','bd_intranet');
		$sql="SELECT * FROM users ORDER BY idUser ASC";
		//lanzamos la sentencia sql
		$datos = mysqli_query($con, $sql);
		?>
		<table border>
			<tr>
				<th>Usuario</th>
				<th>Correo</th>
				<th>Privilegios</th>
				<th>Opciones</th>
			</tr>
		<?php
		while ($usuarios = mysqli_fetch_array($datos)){
				echo "<tr></td><td>$usuarios[nomUser]</td><td>$usuarios[mail]</td><td>$usuarios[privilegios]</td><td>";
				
				//enlace a la página que modifica el usuariosucto pasándole la id (clave primaria)
				 if($usuarios['user_v']==1){
				 	echo "<a href='pagmodificar.php?id=$usuarios[idUser]'><img src='images/edit.png' title='modificar'></a>";
				 }

				//enlace a la página que modifica el usuariosucto (poniendo el campo pro_actiu a 0 o a 1, lo activa o lo desactiva) pasándole la id (clave primaria)
				if($usuarios['user_v']==1){
				echo "<a href='activar_desactivar.proc.php?id=$usuarios[idUser]'><img src='images/ocultar.png' title='desactivar'></a>";
				} else {
					echo "<a href='activar_desactivar.proc.php?id=$usuarios[idUser]'><img src='images/mostrar.png' title='mostrar'></a>";
				}

				echo "</td></tr>";
			}

		?>
		</table>
		<a href="paginacrear_usuario.php">Crear usuario</a>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Añadir usuario</title>
	<script>
function valEmail(valor){
	re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*[.]([a-z]{2,3})$/
	if(!re.exec(valor)) {
		return false;
	}else{
		return true;
	}
}

function validar(){
	enviar=false;
	if(f1.pass.value==f1.repass.value){
		if(valEmail(f1.mail.value)){
			enviar=true;
		} else {
			alert("El email " + f1.mail.value + " es incorrecto.");
			enviar=false;
		}
	} else {
		alert("Las contraseñas no coinciden");
		enviar=false;
	}

	return enviar;
}
</script>
</head>

<body>	
<!-- Registro -->
	<form name="f1" action="crear_usuarios.proc.php" method="post" onSubmit="return enviar;">
		<table>
			<tr>
				<td>Usuario:</td>
				<td><input class="form-box" type="text" name="nom" placeholder="Usuario" required/></td>
			</tr>
			<tr>
				<td>Contraseña: </td>
				<td><input class="form-box" type="password" name="pass" placeholder="Contraseña" required/></td>
			</tr>
			<tr>
				<td>Re-Contraseña: </td>
				<td><input class="form-box" type="password" name="repass" placeholder="Re-Contraseña" required/></td>
			</tr>
			<tr>
				<td>Correo</td>
				<td><input class="form-box" type="text" name="mail" placeholder="ejemplo@ejemplo.com" required/></td>
			</tr>
			<tr>
				<td>Teléfono</td>
				<td><input class="form-box" type="text" name="telf" required/></td>
			</tr>
			<tr>
				<td>Privilegios</td>
				<td><select name="privilegios">
						<option value="admin">Administrador</option>
			       		<option value="member" selected="selected">Usuario</option>
					</select></td>
			</tr>
		</table>
				<input type="submit" onClick="validar()"/>
				<a href="paginausuario_registro.php">Volver</a>
	</form>
</body>
</html>
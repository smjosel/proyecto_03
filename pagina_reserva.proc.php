<?php

session_start();

if(!empty($_SESSION['usuario'])) {	// Sesion de un usuario			
	$user=$_SESSION['idUser'];
} elseif(!empty($_SESSION['admin'])) {		//sesion de un administrador
	$user=$_SESSION['idUser'];
} else {
	?>
	<p>No estas logeado</p>
	<?php
}

	$hoy = date("Y-m-d H:i:s");
	$conn=mysqli_connect('localhost','root','','bd_intranet');
	$sql="UPDATE resources SET idEstado = 2 WHERE resources.idResource = $_REQUEST[id]";
	//echo $sql;
	//echo $_SESSION['resRecurso']."kjhsadkjfhksadjhfksajdfhksajdfh<br><br><br>";
	$sql_i="INSERT INTO registers (idRegister, data_ini, data_fin, idResource, idUser) VALUES (NULL, '$hoy', NULL, '$_REQUEST[id]', '$user')";
	//echo $sql_i;
	$datos=mysqli_query($conn,$sql);
	$datos2=mysqli_query($conn,$sql_i);
	header("location:paginausuario_reservar.php");  

	// $hoy = date("Y-m-d H:i:s");
	// $conn=mysqli_connect('localhost','root','','bd_intranet');
	// $sql_o="SELECT * FROM registers WHERE idresource = $_SESSION[idrecurso] AND data_fin IS NULL";
	// $sql="UPDATE resources SET idEstado = 1 WHERE resources.idResource = $_SESSION[idrecurso]";
	// $datos3=mysqli_query($conn,$sql_o);
	// $datos=mysqli_query($conn,$sql);
	// $valorcito=mysqli_fetch_array($datos3);
	// $sql_i="UPDATE registers SET data_fin = '$hoy' WHERE registers.idRegister = $valorcito[idRegister]";
	// $datos2=mysqli_query($conn,$sql_i);
	// echo $sql."</br>".$sql_i;
	// unset($_SESSION['reserva']);
	// unset($_SESSION['idRecurso']);

	//header("location:paginausuario_reservar.php");
//header("location:paginausuario_reservar.php");


?>